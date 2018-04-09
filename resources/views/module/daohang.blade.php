
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid"> 
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">start</a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('cebian')}}">cebian</a></li>
            <li><a href="{{route('about')}}">help</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Java <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/">jmeter</a></li>
                    <li><a href="#">EJB</a></li>
                    <li><a href="#">Jasper Report</a></li>
                    <li class="divider"></li>
                    <li><a href="#">分离的链接</a></li>
                    <li class="divider"></li>
                    <li><a href="#">另一个分离的链接</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script>
  $('.nav a').on('click', function(e) {                 
 e.preventDefault();  // 阻止链接跳转
 var url = this.href;  // 保存点击的地址
 //$('nav li.active').removeClass('active');    
                    
 $('#containeraa').remove();                          
 $('#content').load(url + ' #containeraa').fadeIn('slow'); 
 // $(this).addClass('active');   
 //  $(this).addClass('active').siblings().removeClass('active');
  //  $(this).addClass('active').siblings().removeClass('active');
});

  $('.nav li').on('click', function(e) {                 
    $(this).addClass('active').siblings().removeClass('active');
});


</script>

 