<!DOCTYPE html>
<html>

<head>
  <title>Новости</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="container">
    <div class="header">
      <div class="logo col">
        <img src="logo.png">
      </div>
      <div class="menu col">
        <ul>
          <li><a href="index.html">Главная</a></li>
          <li><a href="company.html">О компании</a></li>
          <li><a href="yslugi.html">Услуги</a></li>
          <li><a href="news.html"class="ative">Новости</a></li>
          <li><a href="contact.html">Контакты</a></li>
        </ul>
      </div>
      <div class="phone col">
        +7 (123) 456-78-90
      </div>
    </div>

    <div class="news">
      <div class="main-text col">
          <h1>Новости</h1>
        <div class="row-news">

          <!-- Новость -->
          <div class="news-wrap col">
            <div class="news-item">
              <img src="111.png" />
              <div class="news-item-text">
                <p class="news-item-date">27.09.22</p>
                <h2 class="news-item-title">Что такое Lorem Ipsum?</h2>
                <p class="news-item-excerpt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                <p><a href="">Подробнее...</a></p>
              </div>
            </div>
          </div>



          <div class="news-wrap col">
            <div class="news-item">
              <img src="111.png" />
              <div class="news-item-text">
                <p class="news-item-date">27.09.22</p>
                <h2 class="news-item-title">Что такое Lorem Ipsum?</h2>
                <p class="news-item-excerpt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                <p><a href="">Подробнее...</a></p>
              </div>
            </div>
          </div>


          <div class="news-wrap col">
            <div class="news-item">
              <img src="111.png" />
              <div class="news-item-text">
                <p class="news-item-date">27.09.22</p>
                <h2 class="news-item-title">Что такое Lorem Ipsum?</h2>
                <p class="news-item-excerpt">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</p>
                <p><a href="">Подробнее...</a></p>
              </div>
            </div>
          </div>



          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer col">
        <p>Зайцев Максим</p>
        <p>эИСП-9.7</p>
    </div>
    
  </div>

</body>

</html>







<!--
	        	@foreach ($rr as $key => $elem)
	        	@if ($key==$id)
	        	<li><a href="public/page{{key}}" class="active">
	        	{{$elem["title"]}}</a></li>
	        	@else
	        	<li><a href="public/page{{key}}" >
	        	{{$elem["title"]}}</a></li>
	        	@endif
	        	@endforeach
	        </ul>
	-->       
	 