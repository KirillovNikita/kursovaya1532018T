<!DOCTYPE html>
<html>
<head>
    <meta charset="windows-1251">
<title>Feedback</title> 
<link   rel="stylesheet" 
        href="css/main.css" 
		type="text/css" charset="windows-1251">
		
<link   rel="stylesheet"
        href="css/main_page.css"
        type="text/css" charset="windows-1251">

		
<link	href="img/favicon2.ico"  
        rel="shortcut icon"
        type="image/x-icon">

<link   rel="stylesheet"
        href="css/aside.css" 
        type="text/css">		
		
<link rel="stylesheet" href="css/font-awesome.min.css">
    <body> 
        <div id="wrapper">
        <div id="content">

		
		<header>
			  <div id="logo">
			   	 <img src="img/favicon2.ico"
				 <a hrev="http://localhost/t/" title="������� �� ������� ��������">
				 <span>�����������</span>
				 
				 </a>
			  </div>
				  <div id="about">
				 
				  </div>
				    <div id="reg_auth">
				      <a href="http://localhost/t/" title="������� �� ������� ��������">
				        <div id="btn">
					  ������� ��������   
					    </div>
				      </a> 
				      
                                       
				   </div>
			 </header>
			 
			 <nav>
			 <a href="articles.php">������</a>
			 <a href="videos.php">�����</a>
			 <a href="contacts.php">�������� �����</a> 
			 
			 </nav>
		
		
            <div id="main">
            <div id="news">
                <h2 class="heading">�������� �����</h2>
                <div style="clear: both"><br></div>
                <div class="block">
                <br>
                <br>
                    <strong>�������� ���:</strong>
                    <form>
                    <div>
                        <input type="text" id="name" placeholder="���"
                        onclick="$(this).css ('border-color', '#ccc')">
                        <br>
                        <input type="email" id="email" placeholder="e-mail"
                               onclick="$(this).css ('border-color', '#ccc')">
                    </div>
                        <div>
                        <textarea id="message" placeholder="���������"onclick="$(this).css ('border-color', '#ccc')"></textarea>
                        </div>
                        <input type="button" id="send" class="btn" value="���������">
                    </form>
                </div>
                <br>
                <h2 class="heading">�� ��������� ���!</h2>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2140.9837792973303!2d86.06298016201504!3d55.35288575931184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42d80c187c7041fb%3A0x6e00c99c12191397!2z0JrQtdC80LXRgNC-0LLRgdC60LjQuSDQuNC90YHRgtC40YLRg9GCICjRhNC40LvQuNCw0LspINCg0K3QoyDQuNC8LiDQky7Qki4g0J_Qu9C10YXQsNC90L7QstCw!5e0!3m2!1sru!2sru!4v1513169257878" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            
            
        
        <script>
$('#send').click (function () {
	var email = $('#email').val ();
	var name = $('#name').val ();
	var message = $('#message').val ();
	$.ajax({
		url:    	'2n2/contacts.php',
		type:		'POST',
		cache: 		false,
		data:   	{'name':name, 'email':email, 'message':message},
		dataType:	'html',
		beforeSend: function () {
			$('#send').attr ("disabled", "disabled");
		},
		success: function(data) {
			if (data == true) {
				$('#name').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("��������� ����������");
				$('#email').css ("border-color", "#60fc8c");
				$('#name').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
			} else {
				if (data == false)				
					alert ("���-�� ����� �� ���! ��������� �� ����������");
				else {					
					switch (data) {
					case "��� �� �������":
					$('#name').css ("border-color", "#f7b4b4");
					break;
					case "��������� �� �������":
					$('#message').css ("border-color", "#f7b4b4");
					break;
					case "������������ e-mail":
					$('#email').css ("border-color", "#f7b4b4");
					break;
					default:
					$('#email').css ("border-color", "#f7b4b4");
					$('#message').css ("border-color", "#f7b4b4");
					$('#name').css ("border-color", "#f7b4b4");
					}
				}
			}
			$('#send').removeAttr ("disabled");				
		}
	});
});
</script>
        <footer>
			   <div id="site_name">
			     
			   </div> 
			   <div id="clear"></div>
			   <div id="footer_menu">
		          <a href="" title="�������� �����">�������� �����</a>
				  
			   </div>
               <div id="rights">
			   <a href="">����������� &copy; <?=date ('Y') ?> </a>
			   </div>
			   
<div id="social">
<a href="https://vk.com" title="VK"><i class="fa fa-vk" aria-hidden="true"></i></a>
			   <a href="https://ru-ru.facebook.com/" title="FB"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			   <a href="https://twitter.com/?lang=ru" title="TW"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			   <a href="https://www.youtube.com/" title="YT"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			   <a href="https://plus.google.com" title="G+"><i class="fa fa-google-plus" aria-hidden="true"></i></a>


			   
			 </footer>
    </body>
</html>
