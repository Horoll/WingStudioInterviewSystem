<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    protected $beforeActionList=[
        'checkIsLogin' =>  ['except'=>'index,login'],
        'checkIsChoicINterview'=>['except'=>'index,login,home']
    ];

    public function checkIsLogin(){
        if(!cookie('admin')){
            $this->error('请先登录','Index/index');
        }
    }

    public function checkIsChoicINterview(){
        if(!cookie('interviewname')){
            $this->error('请先选择面试','Index/home');
        }
    }

    public function index()
    {
        return $this->fetch('index/index');
    }

    public function login($accountname='',$password=''){
        $result = db('admin')->where('account',$accountname)->find();
        if(!$result){
            $this->error('帐号不存在');
        }
        if($result['password']!=md5($password)){
            $this->error('密码错误');
        }
        cookie('admin',null);
        cookie('admin',$accountname);
        $this->success('登录成功','Index/home');
    }

    public function home($name='',$addname=''){
        if(empty($name)&&empty($addname)){
            $interviews=db('interviews')->where(1)->order('id desc')->select();
            $this->assign('interviews',$interviews);
            return $this->fetch();
        }else if(!empty($name)){
            cookie('interviewname',$name);
            $this->redirect('Index/homeIndex');
        }else if(!empty($addname)) {
            $data = ['name' => $addname];
            db('interviews')->insert($data);
            cookie('interviewname', $addname);
            $this->redirect('Index/homeIndex');
        }
    }

    public function changeInterview(){
        cookie('interviewname',null);
        $this->redirect('home');
    }

    public function homeIndex(){
        $group_id=db('interviews')->where('name',cookie('interviewname'))->value('id');
        $students=db('student')->where('group_id',$group_id)->paginate(15);
        $this->assign('students', $students);
        return $this->fetch();
    }

    public function sign(){
        if(input('?action')&&input('action')=='sign'){
            $result = $this->validate(
                [
                    'name'  => input('name'),
                    'schoolid'=>input('schoolid'),
                    'sex'=>input('sex'),
                    'class'=>input('class'),
                    'mail'=>input('mail'),
                    'phone'=>input('phone')
                ],
                [
                    ['name','require|max:20','姓名必须填写|你名字怕是乱输的哦'],
                    ['schoolid','require|number','学号必须填写|学号必须全部是数字'],
                    ['sex','require','性别必须填写'],
                    ['mail','email','邮箱格式错误']
                ]);
            if(true !== $result){
                // 验证失败 输出错误信息
                $this->error($result);
            }
            $peopleNum = db('interviews')->where('name',cookie('interviewname'))->value('people_num');
            $peopleNum+=1;
            $data=[
                'name'=>input('name'),
                'schoolid'=>input('schoolid'),
                'sex'=>input('sex'),
                'class'=>input('class'),
                'mail'=>input('mail'),
                'phone'=>input('phone'),
                'group_id'=>db('interviews')->where('name',cookie('interviewname'))->value('id'),
                'order_id'=>$peopleNum
            ];
            db('student')->insert($data);
            db('interviews')->where('name',cookie('interviewname'))->setField('people_num',$peopleNum);
            $this->success('签到成功！你的号码是：'.$peopleNum);
        }
        return $this->fetch();
    }

    public function chooseGroup($interview_group=''){
        if(!empty($interview_group)){
            var_dump($interview_group);
            cookie('interviewGroup',$interview_group);
            $this->redirect('Index/marking');
        }
        $group_num=db('interviews')->where('name',cookie('interviewname'))->value('group_num');
        $this->assign('group_num',$group_num);
        return $this->fetch();
    }

    public function marking(){
        if(!cookie('interviewGroup')){
            $this->redirect('Index/chooseGroup');
        }
        //当前喊到哪个号了
        $nowNum=db('interviews')->where('name',cookie('interviewname'))->value('now_num');
        $nowNum+=1;
        cookie('nowNum',$nowNum);
        if($nowNum>db('interviews')->where('name',cookie('interviewname'))->value('people_num')){
            $this->success('面试已经完成','Index/homeIndex');
        }
        db('interviews')->where('name',cookie('interviewname'))->setField('now_num',$nowNum);
        $groupId=db('interviews')->where('name',cookie('interviewname'))->value('id');
        $student=db('student')->where('group_id',$groupId)->where('order_id',$nowNum)->find();
        $this->assign('student',$student);
        return $this->fetch('marking');
    }

    //计数器
    public function counter(){
        return $this->fetch();
    }

    //返回当前号数
    public function nowCounter(){
        return cookie('nowNum');
    }

    //将评分信息写入数据库
    public function getMark($studentId,$grade,$remark=''){
        if(!cookie('interviewGroup')){
            $this->redirect('Index/chooseGroup');
        }
        $arr=explode('|',$grade);
        $grade=0;
        $num=0;
        foreach ($arr as $single) {
            if(is_numeric($single)){
                $grade+=$single;
                $num++;
            }
        }
        $grade/=$num;
        $data=[
            'interview_group'=>cookie('interviewGroup'),
            'interviewer_name'=>cookie('admin'),
            'grade'=>$grade,
            'remark'=>$remark
        ];
        db('student')->where('id',$studentId)->update($data);
        $this->success('评分成功','Index/marking');
    }

    public function rank($interview_group=1){
        $group_num=db('interviews')->where('name',cookie('interviewname'))->value('group_num');
        $students = db('student')->where('interview_group',$interview_group)->order('grade desc')->select();
        $this->assign('group_num',$group_num);
        $this->assign('students',$students);
        $this->assign('interview_group',$interview_group);
        return $this->fetch();
    }

    public function config(){
        if (input('?action')&&input('action')=='config'){
            $data=['group_num'=>input('group_num'),'group_people'=>input('group_people')];
            db('interviews')->where('name',cookie('interviewname'))->update($data);
            $this->success('设置成功');
        }
        $interview=db('interviews')->where('name',cookie('interviewname'))->find();
        $this->assign('interview',$interview);
        return $this->fetch();
    }
}
