<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My ...n syle</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8"/>
        <link rel="stylesheet" href="css/mainpage.css" type="text/css" charset="utf-8"/>
        <meta name="description" content="Мой ...ный сайт. Тестирование работы html, css, php, js. 
        Оттачивание навков и изучение новых фич и особенностей языков."/>
        <meta name="keywords" content="html, css, php, js, javascript"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--увеличивает если открыто на мобильных устройсвах или планшете-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!--иконка на вкладке-->
        <link rel="shortcut icon" href="img/deleted.png" type="image/x=icon"/>
    </head>
    <body>

            <div id="wRaper">
                <div id="content">
                    <header>
                        <div id="logo">
                            <a href="index.php" title="Main sheet">
                                <img src="img/deleted.png" title="main sheet" alt="go on main sheet"/>
                                <span>Go on main sheet</span>
                            </a>
                        </div>

                        <div id="about">
                            <a href="" title="Know more">About</a>
                            <a href="contacts.php" title="Write ower">Write</a>
                        </div>

                        <div id="rec_owers">
                            <a href="" title="Log in">
                                <div class="btn">Log in</div>
                            </a>
                            <a href="" title="Registration">
                                    <div class="btn">Registration</div>
                            </a>
                        </div>
                    </header>

                    <nav>
                        <div id="menuShow">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                        <div id="hideMenu">
                            <a href="" title="Menu 1">Menu 1</a>
                            <a href="" title="Menu 2">Menu 2</a>
                            <a href="" title="Menu 3">Menu 3</a>
                            <a href="" title="Menu 4">Menu 4</a>
                        </div>                       
                        <div id="search">
                            <span >Search</span>
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>

                        <div id="mobilMenu">
                            <a href="" title="Menu 1">Menu 1</a><br>
                            <a href="" title="Menu 2">Menu 2</a><br>
                            <a href="" title="Menu 3">Menu 3</a><br>
                            <a href="" title="Menu 4">Menu 4</a><br>
                            <hr>
                            <a href="" title="Lod in">Log in</a><br>
                            <a href="" title="Registration">Registration</a><br>
                        </div>
                    </nav>


                    <div id="main">
                        <div id="news">
                            <h2 class="heading">Menu 1</h2>
                            <!--отступы-->
                            <div style="clear: both"><br></div>
                            
                            
                            
                            <!--статья-->
                            
                            <div class="article">
                                    <img src="https://vuejs.org/images/logo.png" alt="test" title="test">
                                    <span>— не знаешь, о чём говорит смесь титана, фосфора, кремния и натрия.</span>
                                </div>
                            
                            <a href="" title="See more">
                                <div class="btn">See more</div>
                            </a>
                        </div>
                    </div>

                    <aside>
                        <div id="courses">
                            <h2 class="heading">Video courses<h2>
                            <div style="clear: both"><br></div>
                            <!--course-->
                            <div class="course">
                                    <img src="https://vuejs.org/images/logo.png" alt="test" title="test">
                                    Create game on <em>unity</em>
                                    <span>25 coerse</span>
                                    <div style="clear: both"><br></div>
                                </div>

                                <a href="" title="See more course">
                                <div class="btn">See more</div>
                            </a>
                            <div id="one_course">
                                <h2 class="heading">One course<h2>
                                <div style="clear: both"><br></div>
                                <img src="https://vuejs.org/images/logo.png" alt="test" title="test">

                            
                            </div>
                        </div>
                    </aside>
                    <div style="clear: both"><br></div>

                    <div id="subcribe">
                        <span>Pleas folow</span>
                        <div style="clear: both"><br></div>
                        
                        <script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
                        <!-- VK Widget -->
                        <div id="vk_groups"></div>
                        <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, height: "400"}, 20003922);
                        </script>
                    
                    </div>

                </div>
                    <footer>
                        <div id="syte_name">
                            <span>My syte</span> - my ..n syte
                        </div>
                        <div id="clear"></div>
                        <div id="footer_menu">
                            <a href="" title="Know o">Know about</a>
                            <a href="" title="Help project">Help project</a>
                            <a href="" title="Write letter">Write letter</a>
                        </div>
                        <div id="rigts">
                            <a href="" title="Write letter">All privite is description &copy; <?echo date('Y');?></a>
                        </div>
                        <div id="sotial">
                            <a href="" title="VK"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a href="" title="Facebook">FB</a>
                            <a href="" title="Mail">M</a>
                        </div>
                    </footer>
                </div>
                <!-- jQuery -->
                <script src="jQuery/jquery-3.2.1.min.js"></script>
            <script>
                //открывает илисрывает меню для мобильных устройств
                $('#menuShow').click ( function() {
                    if($('#mobilMenu').is(':visible'))
                        $('#mobilMenu').hide();
                    else $('#mobilMenu').show();
                });

                //закрепление меню при скроле
                if($(document).width() > 785){
                    $(document).scroll(function() {
                        if($(document).scrollTop() > $('header').height() + 10)
                            $('nav').addClass('fixed');
                        else
                        $('nav').removeClass('fixed');
                    });
                }
                //скрывает маленькое меню если у устройсва изменена ориентация экрана
                window.onresize = function(event) {
                    $('#mobilMenu').hide();
                };
            </script>
    </body>
</html>