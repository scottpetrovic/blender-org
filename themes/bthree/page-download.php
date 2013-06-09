<?php
/*
Template Name: Download Page
*/
?>
<?php get_header(); ?>
<script type="text/javascript">
	$(document).ready(function(){
		//var padding = 15;
		var padding = 0;

		$('#active_windows').live('click',function(){
		 	$(".tab-content").animate({height:$("#windows").height() + padding}, 200);
		    $('.tab-content').addClass('windows').removeClass('linux osx source');
		    $('.nav-tabs li').removeClass('osx linux source');
			$('.nav-tabs li.active').addClass('windows');
		});
		$('#active_osx').live('click',function(){
			$(".tab-content").animate({height:$("#osx").height() + padding}, 200);
		    $('.tab-content').addClass('osx').removeClass('windows linux source');
		    $('.nav-tabs li').removeClass('windows linux source');
			$('.nav-tabs li.active').addClass('osx');
		});
		$('#active_linux').live('click',function(){
			$(".tab-content").animate({height:$("#linux").height() + padding}, 200);
		    $('.tab-content').addClass('linux').removeClass('windows osx source');
		    $('.nav-tabs li').removeClass('windows osx source');
			$('.nav-tabs li.active').addClass('linux');
		});
		$('#active_source').live('click',function(){
			$(".tab-content").animate({height:$("#source").height() + padding + 60}, 200);
		    $('.tab-content').addClass('source').removeClass('windows linux osx');
		    $('.nav-tabs li').removeClass('windows linux osx');
			$('.nav-tabs li.active').addClass('source');
		});

		$('a#do_download').click(function(e){
			 e.preventDefault(); // Comment to activate downloads
			$('.card').addClass('flip');
		});

		$('a#clear_download').click(function(){
			$('.card').removeClass('flip');
		});
	});
</script>
		<div class="container download">
			<div class="row">
				<div class="span8 relative">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php
					/* Get the custom fields! */
					$blender_version = get_post_meta(get_the_ID(), 'blender_version', true);
					$blender_version_char = get_post_meta(get_the_ID(), 'blender_version_char', true);
					$blender_release_date = get_post_meta(get_the_ID(), 'blender_release_date', true);
					$download_mirrors 	  = get_post_meta(get_the_ID(), 'download_mirrors', false);

					$release_date = date('F j, Y',strtotime($blender_release_date));
					
					if ($blender_version_char){
						$current_version = $blender_version . $blender_version_char;						
					} else {
						$current_version = $blender_version;
					}
					$os_prefix_windows = 'windows';
					$os_prefix_osx = 'OSX_10.6';
					$os_prefix_linux = 'linux-glibc211';

					/* URL of mirrors for easy changing some day */
					$url_download_nl1 = 'http://download.blender.org/release/Blender' . $blender_version . '/blender-' . $current_version;
					$url_download_nl2 = 'http://ftp.nluug.nl/pub/graphics/blender/release/Blender' . $blender_version . '/blender-' . $current_version;
					$url_download_usa = 'http://mirror.cs.umn.edu/blender.org/release/Blender' . $blender_version . '/blender-' . $current_version;
					$url_download_de = 'http://ftp.halifax.rwth-aachen.de/blender/release/Blender' . $blender_version . '/blender-' . $current_version;

					$choose_mirror = '<div class="choose"><i class="icon-arrow-right"></i> Choose a mirror</div>';

					function download_links($os, $architecture, $extension) {
						global $os_prefix_windows, $os_prefix_osx, $os_prefix_linux, $download_mirrors,
							   $url_download_usa, $url_download_de, $url_download_nl1, $url_download_nl2;

						if ($download_mirrors) {
						echo '<ul class="links">
							  <!-- ' . $architecture . ' Bit -->';
						  foreach($download_mirrors as $mirror) {
								if (in_array('usa', $mirror)) {echo '<a id="do_download" href="' . $url_download_usa . '-' . $os . $architecture . $extension . '" title="Download from the United States"><li>USA</li></a>';}
								if (in_array('de', $mirror)) {echo '<a id="do_download" href="' . $url_download_de . '-' . $os . $architecture . $extension . '" title="Download from Germany"><li>DE</li></a>';}
								if (in_array('nl_borg', $mirror)) {echo '<a id="do_download" href="' . $url_download_nl1 . '-' . $os . $architecture . $extension . '" title="Download from The Netherlands mirror #1"><li>NL 1</li></a>';}
								if (in_array('nl_nluug', $mirror)) {echo '<a id="do_download" href="' . $url_download_nl2 . '-' . $os . $architecture . $extension . '" title="Download from The Netherlands mirror #2"><li>NL 2</li></a>';}
						  }
						}
						echo '</ul>';
					}
					function download_depth_link($os, $bits, $architecture, $extension, $border = FALSE) {
						global $os_prefix_windows, $os_prefix_osx, $os_prefix_linux, $url_download_nl2;
						echo '<a id="do_download" href="' . $url_download_nl2 . '-' . $os . $architecture . $extension . '" title="Download Blender ' . $bits . 'bit">
								<div class="depth '. $border . '"><h1>' . $bits . '<small>bit</small></h1></div>
							  </a>';
					}

					$user_agent = $_SERVER['HTTP_USER_AGENT'];

					function get_os() { 

					    global $user_agent, $os_platform, $os_name;

					    $os_platform =   "unknown";
					    $os_array    =   array( '/win/i'     			=>  'windows',
					                            '/macintosh|mac os x/i' =>  'osx',
					                            '/linux/i'              =>  'linux'
					                        	);

					    foreach ($os_array as $regex => $value) { 
					        if (preg_match($regex, $user_agent)) {
					            $os_platform    =   $value;
					        }
					    }
						if ($os_platform == 'windows') { $os_name = 'Windows';}
						else if ($os_platform == 'linux'){ $os_name = 'GNU / Linux'; }
						else if ($os_platform == 'osx'){ $os_name = 'Mac OSX'; }
					}
					get_os();
					?>

				<div class="post_header">
					<div class="introduction">
						<h1>Get Blender <?=$current_version?> <small>for</small> <?=$os_name?></h1>
						Blender <?=$current_version?> is the latest release from the <a href="<?=get_site_url() . '/foundation'?>">Blender Foundation</a>.
						To download it, please select your platform and location. Blender is Free & Open Source Software.
						<br/><br/>
						Blender <?=$current_version?> was released on <?=$release_date?>
					</div>
				</div>
				<div class="clearfix"></div>
			<div class="relative" style="min-height: 450px"> <!-- relative parent -->
			<div class="card"> <!-- Flipity Flip! -->
			<div class="front">
				<ul class="nav nav-tabs">
				  <li class="<?=($os_platform == 'windows')?'active '.$os_platform:''?>"><a id="active_windows" href="#windows" data-toggle="tab">Windows</a></li>
				  <li class="<?=($os_platform == 'osx')?'active '.$os_platform:''?>"><a id="active_osx" href="#osx" data-toggle="tab">Mac OSX</a></li>
				  <li class="<?=($os_platform == 'linux')?'active '.$os_platform:''?>"><a id="active_linux" href="#linux" data-toggle="tab">Linux</a></li>
				  <li><a id="active_source" href="#source" data-toggle="tab">Source Code</a></li>
				</ul>
				<div class="tab-content <?=$os_platform?>" id="tab-content">

				  <!-- WINDOWS -->
				  <div class="tab-pane fade <?=($os_platform == 'windows')?'in active':''?>" id="windows">
				  	<div class="header">
				  		<div class="title">
				  			<h1><i class="blicon-logo-windows"></i> Blender <?=$current_version?> for Windows</h1>
				  			<h4>Compatible with Windows 8 / 7 Vista / XP</h4>
						</div>
						<? download_depth_link($os_prefix_windows, 32, 32, '.exe', 'border-left');?>
						<? download_depth_link($os_prefix_windows, 64, 64, '.exe');?>
				  	</div>
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
			  			<h2>Installer</h2>
						<? download_links($os_prefix_windows, 32, '.exe'); ?>
						<? download_links($os_prefix_windows, 64, '.exe'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- Installer-->
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>.ZIP</h2>
						<? download_links($os_prefix_windows, 32, '.zip'); ?>
						<? download_links($os_prefix_windows, 64, '.zip'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- .ZIP-->
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>.7z</h2>
						<? download_links($os_prefix_windows, 32, '.7z'); ?>
						<? download_links($os_prefix_windows, 64, '.7z'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- 7z-->
				 <div class="clearfix"></div>
				 <div class="alert alert-info">
				 	<i class="icon-info-sign"></i>
				 	If the application reports an error on startup, please install the Visual C++ 2008 Redistributable Package.
				 	<a href="http://www.microsoft.com/en-us/download/details.aspx?id=29">32bit</a> / 
				 	<a href="http://www.microsoft.com/en-us/download/details.aspx?id=15336">64bit</a>
			 	 </div>
			  	 </div> <!-- // WINDOWS -->

				  <!-- MAC OSX -->
				  <div class="tab-pane fade <?=($os_platform == 'osx')?'in active':''?>" id="osx">
				  	<div class="header">
				  		<div class="title">
				  			<h1><i class="blicon-logo-apple"></i>Blender <?=$current_version?> for Mac OSX</h1>
				  			<h4>Requires Mac OS X 10.6+</h4>
						</div>
						<? download_depth_link($os_prefix_osx, 32, '-i386', '.zip', 'border-left');?>
						<? download_depth_link($os_prefix_osx, 64, '-x86_64', '.zip');?>
				  	</div>
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>.ZIP</h2>
						<? download_links($os_prefix_osx, '-i386', '.zip'); ?>
						<? download_links($os_prefix_osx, '-x86_64', '.zip'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- .ZIP-->
				 <div class="clearfix"></div>
				 <div class="alert alert-info">
				 	<i class="icon-info-sign"></i>
				 	If the 3DConnexion device fails, you need
				 	<a href="http://www.3dconnexion.com/supported-software/3dxlabs/3dxlabsapp.html?tx_sugar3dxsoftware_pi1%5Bapp_id%5D=bd708299-9e93-2561-3908-4d9d89cc6177">
				 		3DxWare 10 Beta 4</a> (Mac OS X) or later!
			 	 </div>
			  	 </div> <!-- // OSX -->

				  <!-- LINUX -->
				  <div class="tab-pane fade <?=($os_platform == 'linux')?'in active':''?>" id="linux">
				  	<div class="header">
				  		<div class="title">
				  			<h1><i class="blicon-tux"></i> Blender <?=$current_version?> for GNU / Linux</h1>
				  			<h4>Requires glibc 2.11. Includes Python 3.3, FFmpeg<br/>
				  				Suits most recent Linux distributions</h4>
						</div>
						<? download_depth_link($os_prefix_linux, 32, '-i686', '.tar.bz2', 'border-left');?>
						<? download_depth_link($os_prefix_linux, 64, '-x86_64', '.tar.bz2');?>
				  	</div>
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>Tarball .bz2</h2>
						<? download_links($os_prefix_linux, '-i686', '.tar.bz2'); ?>
						<? download_links($os_prefix_linux, '-x86_64', '.tar.bz2'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- // tar.bz2-->
				 <div class="clearfix"></div>
				  </div> <!-- // LINUX -->

				  <!-- SOURCE -->
				  <div class="tab-pane fade" id="source">
				  	<div class="header">
				  		<div class="title">
				  			<h1><i class="blicon-logo-blender"></i> Source Code for Blender <?=$current_version?></h1>
							There are multiple ways to get the source code for blender. 
							If you are going to actually try to use the source code you should really use svn to checkout the latest version. 
							If this is of interest to you, check out our getting involved section.
							<br/><br/>
						</div>
				  	</div>
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>Source</h2>
						<ul class="links">
							<!-- Source -->
							<a href="http://mirror.cs.umn.edu/blender.org/source/blender-<?=$current_version?>.tar.gz"><li><h4>USA</h4></li></a>
							<a href="http://download.blender.org/source/blender-<?=$current_version?>.tar.gz"><li><h4>NL</h4></li></a>
						</ul>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> 
				 <div class="clearfix"></div>

				<h2>MD5 checksum</h2>

				Download the md5sum to the same directory as the source tarball and run the following command to verify the integrity of the download.
				<code>$ md5sum -c blender-2.66a.tar.gz.md5sum</code>

				<h2>History</h2>

				All past releases can be downloaded at <strong><a href="http://download.blender.org/source/">download.blender.org/source</a></strong>
				<br/>
				Check <strong><a href="http://download.blender.org/source/chest/">download.blender.org/source/chest</a></strong> for interesting source code from the past.
				It has old Blender versions as well as interesting in-house software from the company that developed Blender;
				dutch studio NeoGeo (no not the game console!).
				</div><!-- // SOURCE-->

  				<div class="clearfix"></div>
				</div> <!-- // TABS -->
			</div><!-- front -->
			<div class="back">
				<div class="thanks relative">
					<h1>Congratulations!</h1>
					<h2>You're the proud owner of your own 3D software.</h2>
					<div class="clearfix"></div>
					<div class="donations">
						<div class="donate_way shopping">
							<h1><i class="icon-shopping-cart"></i></h1>
							<h3>Go Shopping</h3>
							Find DVDs, books, t-shirts, and more at the Blender Store. 
							<hr/>
							<button class="btn btn-small">Visit the Blender Store <i class="icon-external-link"></i></button>
						</div>
						<div class="donate_way donation">
							<h1><i class="icon-heart"></i></h1>
							<h3>Direct Donation</h3>
							Support the Blender Foundation directly via PayPal.
							<hr/>
							<button class="btn btn-small">Donate via PayPal <i class="icon-external-link"></i></button>
						</div>
						<div class="donate_way devfund" style="margin-right: 0;">
							<h1><i class="icon-cog"></i></h1>
							<h3>Support Development</h3>
							You can donate towards the Blender Development Fund.
							<hr/>
							<button class="btn btn-small">Donate via PayPal <i class="icon-external-link"></i></button>
						</div>
					</div>
					<div class="clearfix"></div>
					<a id="clear_download" title="Back" class="pull-right" style="padding-top: 5px"><i class="icon-undo"></i></a>
				</div>
			</div><!-- back -->
			</div><!-- Flipity Flip! -->
			</div><!-- //relative parent-->
				<div class="clearfix"></div>
				<div class="accordion" id="accordion_windows">
				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_windows" href="#collapse_one">
				        <h3>How do I install Blender?</h3>
				      </a>
				    </div>
				    <div id="collapse_one" class="accordion-body collapse">
				      <div class="accordion-inner">
				        To install Blender, download the appropriate package for your platform to your computer.
				        The Windows version comes with an optional self-extracting installer,
				        for other operating systems you can unpack the compressed file to the location of your choice.  

						Provided the Blender binary is in the original extracted directory,
						Blender will run straight out of the box.
						No system libraries or system preferences are altered.
				      </div>
				    </div>
				  </div>
				</div> <!-- accordion -->

 				<?php endwhile; // end of the loop. ?>
				</div> <!-- // span8 -->
				<div class="span4">
					<?php get_sidebar(); ?> 
				</div>
			</div><!-- main row -->
		</div> <!-- // container download -->
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>