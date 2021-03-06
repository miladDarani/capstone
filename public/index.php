<?php 
require __DIR__ . "/../config.php";
$title = "Welcome To Sound Comet";
use Capstone\BlogModel;
use Capstone\LogModel;

$post = new BlogModel();
$p = $post->allPosts();

require __DIR__ . "/../includes/header_inc.php";

$log= new LogModel();
$log->addLog($arr);
?>


<!-- PHP IF STATEMENT -->
<?php if(!empty($flash)) :?> 

    <div class="flash-area <?=esc($flash['class'])?>">

      <span><?=esc($flash['message'])?></span>

    </div>

<?php endif; ?>
<!-- END IF STATEMENT -->

<div id="row1">

    <div id="slogan">
        
        <h1 id="tools">Tools for</h1>
       
        <h1>Musicians and</h1>
        <h1>Creators.</h1>
        <p>Worlds First Instant Mixing and Mastering Platform</p>
        <p>Try it Now for Free</p>
        <a href="register.php" class="myButton">Subscribe</a>

        <div id="social-media">
            <img id="facebook" src="images/svgs/brands/facebook.svg" alt="Facebook Logo" />
            <img id="twitter" src="images/svgs/brands/twitter.svg" alt="Twitter Logo" />
            <img id="instagram" src="images/svgs/brands/instagram.svg" alt="Instagram Logo" />
        </div>

    </div>

    <div id="sound-bar">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 251.912 251.912" style="enable-background:new 0 0 251.912 251.912;" xml:space="preserve">
            <g>
                <g>
                    <g>
                        <g>
                            <path style="fill:#7be2f8;" d="M43.018,48.484c-3.908,0-7.077,3.128-7.077,6.984v189.46c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984V55.468C50.092,51.612,46.924,48.484,43.018,48.484z" />
                        </g>
                        <g>
                            <path class="bounce" style="fill:#7be2f8;" d="M43.018,21.878c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984v-8.392C50.092,25.006,46.924,21.878,43.018,21.878z" />
                        </g>
                        <g>
                            <path class="bounce" style="fill:#7be2f8;" d="M78.399,77.754c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-8.392C85.477,80.882,82.308,77.754,78.399,77.754z" />
                        </g>
                        <g>
                            <path class="bounce" style="fill:#7be2f8;" d="M113.783,49.818c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984v-8.392C120.858,52.943,117.691,49.818,113.783,49.818z" />
                        </g>
                        <g>
                            <path class="bounce2" style="fill:#7be2f8;" d="M184.548,18.389c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-8.392C191.624,21.514,188.455,18.389,184.548,18.389z" />
                        </g>
                        <g>
                            <path class="bounce3" style="fill:#7be2f8;" d="M219.928,95.215c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-8.392C227.005,98.343,223.837,95.215,219.928,95.215z" />
                        </g>
                        <g>
                            <path class="bounce2 " style="fill:#7be2f8;" d="M149.163,151.088c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984v-8.392C156.24,154.216,153.072,151.088,149.163,151.088z" />
                        </g>
                        <g>
                            <path style="fill:#7be2f8;" d="M78.399,102.96c-3.908,0-7.077,3.128-7.077,6.984v134.983c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984V109.944C85.477,106.088,82.308,102.96,78.399,102.96z" />
                        </g>
                        <g>
                            <path style="fill:#7be2f8;" d="M113.783,76.763c-3.908,0-7.077,3.128-7.077,6.984v161.181c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984V83.747C120.858,79.888,117.691,76.763,113.783,76.763z" />
                        </g>
                        <g>
                            <path style="fill:#7be2f8;" d="M149.163,176.146c-3.908,0-7.077,3.128-7.077,6.984v61.798c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984V183.13C156.24,179.274,153.072,176.146,149.163,176.146z" />
                        </g>
                        <g>
                            <path style="fill:#7be2f8;" d="M184.548,44.162c-3.908,0-7.077,3.128-7.077,6.984v193.782c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984V51.146C191.624,47.29,188.455,44.162,184.548,44.162z" />
                        </g>
                        <g>
                            <path style="fill:#7be2f8;" d="M219.928,122.341c-3.908,0-7.077,3.128-7.077,6.984v115.603c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984V129.325C227.005,125.469,223.837,122.341,219.928,122.341z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path style="fill:#ff4133;" d="M31.986,138.725c3.908,0,7.077-3.169,7.077-7.077V37.079c0-3.856-3.169-6.984-7.077-6.984
			s-7.077,3.128-7.077,6.984v94.568C24.909,135.556,28.078,138.725,31.986,138.725L31.986,138.725z" />
                            <path style="fill:#ff4133;" d="M39.061,181.671v-31.618c0-3.908-3.169-7.077-7.077-7.077l0,0c-3.908,0-7.077,3.169-7.077,7.077
			v31.618c0,3.908,3.169,7.077,7.077,7.077l0,0C35.892,188.748,39.061,185.579,39.061,181.671z" />
                            <path style="fill:#ff4133;" d="M31.986,193.001c-3.908,0-7.077,3.169-7.077,7.077v26.463c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-26.463C39.061,196.17,35.892,193.001,31.986,193.001L31.986,193.001z" />
                        </g>
                        <g>
                            <path class="bounce2" style="fill:#ff4133;" d="M31.986,3.492c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-8.392C39.061,6.62,35.892,3.492,31.986,3.492z" />
                        </g>
                        <g>
                            <path class="bounce2" style="fill:#ff4133;" d="M67.367,59.368c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984v-8.392C74.444,62.493,71.276,59.368,67.367,59.368z" />
                        </g>
                        <g>
                            <path class="bounce2" style="fill:#ff4133;" d="M102.751,31.429c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-8.392C109.825,34.557,106.659,31.429,102.751,31.429z" />
                        </g>
                        <g>
                            <path class="bounce" style="fill:#ff4133;" d="M173.514,0c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984V6.984C180.592,3.128,177.423,0,173.514,0z" />
                        </g>
                        <g>
                            <path class="bounce2" style="fill:#ff4133;" d="M208.895,76.829c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-8.392C215.973,79.954,212.804,76.829,208.895,76.829z" />
                        </g>
                        <g>
                            <path class="bounce3" style="fill:#ff4133;" d="M138.132,132.702c-3.908,0-7.077,3.128-7.077,6.984v8.392c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984v-8.392C145.208,135.83,142.039,132.702,138.132,132.702z" />
                        </g>
                        <g>
                            <path style="fill:#ff4133;" d="M67.367,84.571c-3.908,0-7.077,3.128-7.077,6.984v134.983c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984V91.556C74.444,87.699,71.276,84.571,67.367,84.571z" />
                        </g>
                        <g>
                            <path style="fill:#ff4133;" d="M102.751,58.374c-3.908,0-7.077,3.128-7.077,6.984v161.181c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984V65.358C109.825,61.502,106.659,58.374,102.751,58.374z" />
                        </g>
                        <g>
                            <path style="fill:#ff4133;" d="M138.132,157.76c-3.908,0-7.077,3.128-7.077,6.984v61.798c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984v-61.798C145.208,160.888,142.039,157.76,138.132,157.76z" />
                        </g>
                        <g>
                            <path style="fill:#ff4133;" d="M173.514,25.776c-3.908,0-7.077,3.128-7.077,6.984v193.782c0,3.856,3.169,6.984,7.077,6.984
			c3.908,0,7.077-3.128,7.077-6.984V32.76C180.592,28.903,177.423,25.776,173.514,25.776z" />
                        </g>
                        <g>
                            <path style="fill:#ff4133;" d="M208.895,103.952c-3.908,0-7.077,3.128-7.077,6.984v115.603c0,3.856,3.169,6.984,7.077,6.984
			s7.077-3.128,7.077-6.984v-115.6C215.973,107.08,212.804,103.952,208.895,103.952z" />
                        </g>
                    </g>
                </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
        </svg>
    </div>
</div>
<!-- Row1 End -->

<div id="row2-wrapper">
    <div id="row2">
        <div id="right-side">
            <h1 id="finish-heading">Finish your next track with Sound Comet. In minutes</h1>
            <p>Sound Comet is a system for instantly mixing music online. With today’s computing power, along with advanced algorithms and machine learning, music can be mixed automatically following the steps that an audio engineer would take.</p>
            <p>Our hope is that this service will fill a gap in the industry, allowing any and all musicians to present high quality music to their fans.</p>
            <a href="https://www.youtube.com/watch?v=l2uPemLXZFY" target="_blank" class="myButton" id="button2">Take 1-minute Tour</a> 
        </div>

        <div id="row2-side-wrapper">

            <div id="row2-a">

                <div class="amplifier box">
                    <img id="amp" src="images/amplifier.svg" alt="amplifier">
                    <h3>1. Upload</h3>
                    <p>Drag and Drop your audio file into the upload area</p>
                </div>

                <div class="speaker box">
                    <img id="spkr" src="images/speaker.svg" alt="amplifier">
                    <h3>2. Choose Preset</h3>
                    <p>Choose your preset to identify the song genre and vibe you are going for</p>
                </div>

            </div>
            <!-- Row 2 a -->

            <div id="row2-b">
                <div class="knob box">
                    <img id="knob" src="images/knob.svg" alt="amplifier">
                    <h3>3. Wait 1 minute</h3>
                    <p>System analyzes your track and applies the required adjustments.</p>
                </div>

                <div class="keyboard box">
                    <img id="key" src="images/keyboard.svg" alt="amplifier">
                    <h3>4. Finished Track</h3>
                    <p>Download your finished track and release it on your desired platform</p>
                </div>

            </div>
            <!-- Row 2 b -->

        </div>
    </div>
    <!-- ROW 2 END -->

</div>
<!-- Row2 Wrapper End -->


<div class="row3-sound-pro">
    <h1>Professional audio mastering with instant results. Sound like a pro without paying studio rates or learning complex plug-ins.</h1>
    <i class="fas fa-volume-up sound-pro-play"></i>
</div>

<div class="sound-pro-container">
    
    <div class="sound-pro-wrapper row">
    
        <div class="sound-pro-1 sound-pro-box"><h1>Sound Professional</h1>
            <p>Instant results at a fraction of the cost of studio mastering. Competitive sound has never been more affordable.</p>
        </div>

        <div class="sound-pro-2 sound-pro-box"><h1>Instant Results</h1>
            <p>Use SOUNDCOMET for final masters, demos, mix referencing or entire albums. Upload audio, tweak the controls to find your sound, and download.</p>
        </div>

        <div class="sound-pro-3 sound-pro-box"><h1>Amazing Quality</h1>
            <p>Polish and balance your sound and make your music ready for streaming or any other playback scenario. Share with confidence.</p>
        </div>

    </div>

</div>

<div class="try-row">
    <h1 class="try-h1">Try it FREE</h1>
    <p style="padding-bottom:20px" class="try-p">Better sound is here</p>
    <a href="register.php" class="try-btn" style="padding:24px; text-decoration:none; margin-top:20px">Get Started</a>
</div>

<div class="video-row">
    <div class="head-1">
        <h1>This is the 3 minute solution <br /> for your unfinished tracks !  </h1>
        <p>Interview with John Doe, his clients include : Taylor Swift, Rihanna, Jay-z and more</p>
        <a  target="_blank" class="popup-youtube" href="https://www.youtube.com/watch?v=pX5Sq7ythY8"><p><i class="fas fa-play-circle video-circle"></i></p></a>
    </div>
</div>

<div class="soundcloud">
    <div class="hear-it">
        <div class="hear-it-content">
            <h2>Hear the Difference</h2>
            <p><strong>Sound Comet </strong> is a system for instantly mixing music online. With today’s computing power, along with advanced algorithms and machine learning, music can be mixed automatically following the steps that an audio engineer would take.</p>
            <a class="try-btn3" href="pricing.php">SUBSCRIBE</a>
        </div>
    </div>

    <div class="soundcloud-wrapper">
        <iframe width="600" height="450" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/679309221&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    </div>
</div>
<div id="row4">
    
<!-- Slideshow HTML -->

    <div class="slides">        
        <ul class="rslides" >
        <!-- PHP FOREACH LOOP -->
        <?php foreach ($p as $post) : ?>
            <li>

                <h4>
                    <a  class="title-for-blog" style="text-decoration:none; color:#555;" href="blog_detail.php?page=blog_detail&post_id=<?=esc($post['post_id'])?>"><?=esc($post['title'])?>
                    </a>
                </h4>

                <a href="blog_detail.php?page=blog_detail&post_id=<?=esc($post['post_id'])?>">
                    <img src="images/blog-pics/<?=esc($post['image'])?>" alt="">
                </a>

                <p style="border:1px solid #555; padding :10px; margin:25px auto 40px auto;">
                    <span class="text"> <?=esc($post['full_desc'])?></span>
                </p>

                <a class="try-btn2 title-for-blog" style="text-decoration:none;width:100%; padding:5px 80px; margin-top:45px !important;" href="blog_detail.php?page=blog_detail&post_id=<?=esc($post['post_id'])?>">
                     Read More</a>
               

            </li>

        <?php endforeach ; ?>
        <!-- END FOREACH LOOP -->

        </ul>

        <div class="blog-head">

            <h1>The Latest Tips and Tricks</h1>
            <p>Sound Design | Mixing | Mastering | News</p>

            <div class="blog-head-p">
               
                <p style="margin-top:60px; border:1px solid white; text-align:left; font-size:18px;padding:35px 40px; margin-bottom: 74px;"> Our blog post are made by industry professional covering variety of topics. We pride ourselves by staying ahead of the trends. Become the master of mastering or be the mix engineer everyone is looking for. </p>
                
            </div>
            
            <div class="arrow-container">
                <h2 class="blog-btn">
                    <a  class="blog-a" href="blog.php">GO TO BLOG</a>
                </h2>  
            </div>
        </div>
    </div>
</div>
<!-- END ROW 4 -->






<?php 
require __DIR__ . "/../includes/footer_inc.php";
?>