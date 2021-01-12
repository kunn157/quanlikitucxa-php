<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			

			.data-list {
				height: 500px;
				width: 500px;
				padding: 2rem;
				overflow-y: hidden;
				
			}
		</style>
</head>
<body>
    
 
 <div class="container-fluid">
        <div class="row">
            <div class="col-2 nenbac" style="margin-left: -1px" >
                    <nav id="menu">      
                        <ul>
                            <h3><strong> Sinh Viên</strong> </h3> 
                                    <li><a href="index.php?action=login"><h6><strong>Đăng nhập</strong></h6></a></li>
                                    <li><a href="index.php?action=capnhapthongtin"> <h6><strong>Cập Nhập Thông Tin</strong></h6></a></li>
                                    <li><a href="index.php?action=dkphong"><h6><strong>Đăng Ký Phòng</strong></h6></a></li>
                                    <li><a href="index.php?action=chuyenphong"><h6><strong>ĐK Chuyển Phòng</strong></h6></a></li>
                                    <li><a href="index.php?action=traphong"><h6><strong>Trả Phòng</strong></h6></a></li>
                                    <li><a href="index.php?action=tracucphong"><h6><strong>Tra cứu Phòng</strong></h6></a></li>
                                    <li><a href="index.php?action=phongdango"><h6><strong>Xem Phòng Đang Ở</strong></h6></a></li>
                                    <li><a href="index.php?action=xemthongbao"><h6><strong>Xem Thông Báo</strong></h6></a></li>
                                    <li><a href="index.php?action=logout"><h6><strong>Đăng Xuất</strong></h6></a></li>
                        </ul>        
                      </nav>
            </div>
            <div class="col-8 ">
                <?php include_once('include/content.php'); ?>
            </div>
            <div class="col-2 nenbac" >
               <div >   
                    <img src="images/logo.png" width="230px;" 
                         alt="Activities Board">
                    <center><h4> <a href="http://vku.udn.vn/tin-tuc-va-hoat-dong" class="no_underline">
                       <strong style="color:black;"> ĐỐI TÁC HỢP TÁC   </strong></center>
                    </a></h4>
                 </div>

                 <div class="">
			
            <ul class="data-list" data-autoscroll style="list-style: none; margin-left: -15px ; " >
                <li><img src="http://www.vku.udn.vn/uploads/doitac/fpt.jpg" style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/dosanvina.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/sangmyung-han-quoc-4-1.jpg"style="width: 200px"></li>
                <li> <img src="http://www.vku.udn.vn/uploads/doitac/samsung.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/microsoft.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/lotus.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/anpsoft-ltd-logo.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/donguk.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/DSU_Emblem.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/Logo_for_Chosun_University.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/sungduk-college-university.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/tongmyong.gif"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/Handong.jpg"style="width: 200px"></li>
                <li><img src="http://www.vku.udn.vn/uploads/doitac/sungduk-college-university.jpg"style="width: 200px"></li>
                
            </ul>
        </div>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
            <script src="include/js/jquery.autoscroll.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
    <script>
    try {
      fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
        return true;
      }).catch(function(e) {
        var carbonScript = document.createElement("script");
        carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
        carbonScript.id = "_carbonads_js";
        document.getElementById("carbon-block").appendChild(carbonScript);
      });
    } catch (error) {
      console.log(error);
    }
    </script> 

            </div>
        </div>        
    </div>
</body>
</html>