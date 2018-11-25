<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $OJ_NAME?></title>
    <?php include("template/$OJ_TEMPLATE/css.php");?>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    <?php include("template/$OJ_TEMPLATE/nav.php");?>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
<hr>
<center>
  <font size="+3"><?php echo $OJ_NAME?> Online Judge FAQ</font>
</center>
<hr>

<p>关于这个OJ的软硬件配置:<br>
    系统运行于<a href="https://www.centos.org/">Centos</a>
    Linux。<br>硬件环境为Intel Pentium 4415u(Kabylake 2C4T 2.3G 2M)，你可以使用在X86平台上的所有trick，只不过不能target("avx")，因为这颗CPU不支持AVX。<br>
    使用<a href="http://gcc.gnu.org/">GNU GCC/G++</a> 作为C/C++编译器。
    没错，目前实装的语言只有C/C++，惊不惊喜，意不意外？
    <br>编译选项如下:<br>
</p>
<table border="1">
  <tr>
    <td>C:</td>
    <td><font color=blue>gcc Main.c -o Main  -fno-asm -Wall -lm --static -std=c99 -DONLINE_JUDGE</font>
      </td>
  </tr>
  <tr>
    <td>C++:</td>
    <td><font color=blue>g++ -fno-asm -Wall -lm --static -std=c++11 -DONLINE_JUDGE -o Main Main.cc</font></td>
  </tr>
</table>
<p>  编译器版本为:<br>
  <font color=blue>g++ (GCC) 4.8.5 20150623 (Red Hat 4.8.5-28)</font><br>
  <pre>#pragma GCC optimize ("O2")</pre> 可以手工开启O2优化<del>(据说NOIP这么干会死)</del>。
</font></p>


<p>添加题目须知:<br>
    本OJ为正规OJ，主要为NOIP一等及以上水平的OIer准备。题目主要由原创题，校内考试题等构成，难度应控制在NOIP+（也就是最低为备战NOIP时期的较难题）。禁止加水题，错题，无数据题，不可做题，各种意义上的送命题（如猜随机数），原则上禁止搬题，但可以添加BZOJ权限题，计蒜客氪金题等资源相对不易获得的题目（我那两道测速题就饶了我吧）。
</p>

<p>添加题目教程:<br>
1.进入OJ后台，输入题面数据。<br>
2.访问<a href="KOD/">KOD文件管理器</a>，进入<pre>/home/judge/data/Problem_id</pre>目录，删除自动生成的样例并添加数据。<br>
3.然后就能提交评测啦！<br>
4.关于spj？首先你要先写一个NTOJ的spj，接口为argv[1,2,3]分别为输入文件，标准输出，用户输出，返回值[0,1]分别为AC,WA。然后把spj.cc和数据一起上传至数据文件夹内，</p>最后ssh登陆服务器，<pre>cd</pre>到数据目录，运行命令<pre>g++ spj.cc -o spj && sudo chmod 777 spj</pre>。之后就能提交评测啦！<br>


<p>大概就是这样了，祝大家玩的开心。<br>
<p>奇奇怪怪的小彩蛋：<br>
<a href="DB/Sion">Sion</a>
<a href="DB/Isla">Isla</a>

<hr>
<center>
  <font color=green size="+2">其他问题请访问<a href="bbs.php"><?php echo $OJ_NAME?>论坛系统</a></font>
</center>
<hr>
<center>
  <table width=100% border=0>
    <tr>
      <td align=right width=65%>
      <a href = "index.php"><font color=red><?php echo $OJ_NAME?></font></a>
      <a href = "https://github.com/zhblue/hustoj"><font color=red>17.12.01</font></a></td>
    </tr>
  </table>
</center>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php include("template/$OJ_TEMPLATE/js.php");?>

  </body>
</html>
