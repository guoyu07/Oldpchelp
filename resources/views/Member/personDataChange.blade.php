@extends('body')
@section('main')

    <section class="padLR1r">
        <!--头像-->
        <span class="headIco"><img src="{{asset('img/pis.jpg')}}" class="img-circle img-responsive center-block" alt=""></span>
        <!--填写内容-->
        {!! Form::open(['action' => 'Member\HomeController@updatePcer', 'style'=>'display: inline;']) !!}
        <!--姓名-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">姓名</p>
            <input type="text" name="name" class="inputText marTBd8r" placeholder="真实姓名" required="required" value="{{$pcer['name']}}"/>
        </div>
        <!--sex-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">性别</p>
            <div class="marTBd8r font13 pr">
                <select class="selectDown" name="sex">
                    <option value="{{$pcer['sex']}}">@if($pcer['sex']==0)男@else 女@endif</option>
                    <option value="0">男</option>
                    <option value="1">女</option>
                </select>
                <span class="downBtn"></span>
            </div>
        </div>
        <!--年级-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">年级</p>
            <div class="marTBd8r font13 pr">
                <select class="selectDown" name="pcerlevel_id">
                    <option value="{{$pcer['pcerlevel_id']}}">{{$pcer['level_name']}}</option>
                @if($pcerLevels)
                @foreach ($pcerLevels as $pcerLevel)
                    <option value="{{$pcerLevel['id']}}">{{$pcerLevel['level_name']}}</option>
                @endforeach   
                @endif 
                </select>
                <span class="downBtn"></span>
            </div>
        </div>
        <!--学号-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">学号</p>
            <input type="number" name="school_id" class="inputText marTBd8r" required="required" placeholder="例如：122011137" value="{{$pcer['school_id']}}"/>
        </div>
        <!--学系-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">学系</p>
            <input type="text" name="department" class="inputText marTBd8r" placeholder="例如：电子通信与软件工程系" required="required" value="{{$pcer['department']}}"/>
        </div>
        <!--专业-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">专业</p>
            <input type="text" name="major" class="inputText marTBd8r" placeholder="例如：计算机科学与技术" required="required" value="{{$pcer['major']}}"/>
        </div>
        <!--班级-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">班级</p>
            <input type="text" name="clazz" class="inputText marTBd8r" placeholder="例如：计算机3班" required="required" value="{{$pcer['clazz']}}"/>
        </div>
        <!--联系方式-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">手机长号</p>
            <input type="tel" name="long_number" class="inputText marTBd8r" required="required" placeholder="一定要填" value="{{$pcer['long_number']}}"/>
        </div>
        <div class="marTBd8r borderB">
            <p class="color2f font14">校园短号</p>
            <input type="tel" name="number" class="inputText marTBd8r"  placeholder="有的麻烦留一下"
            value="{{$pcer['number']}}" />
        </div>
        <!--地址-->
        <div class="marTBd8r borderB">
            <p class="color2f font14">院区</p>
            <div class="marTBd8r font13 pr">
                <select class="selectDown" name="area">
                    <option value="{{$pcer['area']}}">@if($pcer['area']==0)东区@else 西区@endif</option>
                    <option value="0">东区</option>
                    <option value="1">西区</option>
                </select>
                <span class="downBtn"></span>
            </div>
        </div>
        <div class="marTBd8r borderB">
            <p class="color2f font14">宿舍号</p>
            <input type="text" name="address" class="inputText marTBd8r" required="required" placeholder="例如：H12" value="{{$pcer['address']}}"/>
        </div>
        <P style="color:red;font-size: 10px;">PS:当审核还没有通过时，可以修改自己的信息加快审核通过时间</P>
        <input type="submit" value="提交" class="mainBtn marTBd8r font14 color2f">
        {!! Form::close() !!}

  <div class="row-fluid">
    <div class="span12">
      <p class="text-center">
        © 2016 中大南方PC服务队 | Powered by JokerLinly
      </p>
    </div>
  </div>
@stop