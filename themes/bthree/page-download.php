<?php
/*
Template Name: Download Page
*/
?>

<?php get_header(); ?>
<?php get_header('title'); ?>

		<div class="container download">
			<div class="row">
				<div class="span8">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php 
					$blender_version = get_post_meta(get_the_ID(), 'blender_version', true);
					$blender_version_char = get_post_meta(get_the_ID(), 'blender_version_char', true);
					$blender_release_date = get_post_meta(get_the_ID(), 'blender_release_date', true);
					
					$release_date = date('F j, Y',strtotime($blender_release_date));
					
					if ($blender_version_char){
						$current_version = $blender_version . $blender_version_char;						
					} else {
						$current_version = $blender_version;
					}
					$os_prefix_windows = 'windows';
					$os_prefix_osx = 'OSX_10.6';
					$os_prefix_linux = 'linux-glibc211';

					$url_download_nl1 = 'http://download.blender.org/release/Blender' . $blender_version . '/blender-' . $current_version;
					$url_download_nl2 = 'http://ftp.nluug.nl/pub/graphics/blender/release/Blender' . $blender_version . '/blender-' . $current_version;
					$url_download_usa = 'http://mirror.cs.umn.edu/blender.org/release/Blender' . $blender_version . '/blender-' . $current_version;
					$url_download_de = 'http://ftp.halifax.rwth-aachen.de/blender/release/Blender' . $blender_version . '/blender-' . $current_version;

					$choose_mirror = '<div class="choose"><i class="icon-arrow-right"></i> Choose a mirror</div>';

					function download_links($os, $bits, $extension) {
					
						global $os,$url_download_usa,$url_download_de,
							   $url_download_nl1,$url_download_nl2;
					
						echo '
						<ul class="links ' . $bits . '">
							<!-- ' . $bits . ' Bit -->
							<a id="do_download" target="_blank" href="' . $url_download_usa . '-' . $os . $bits . $extension . '" title="Download from the United States"><li>USA</li></a>
							<a id="do_download" target="_blank" href="' . $url_download_de . '-' . $os . $bits . $extension . '" title="Download from Germany"><li>DE</li></a>
							<a id="do_download" target="_blank" href="' . $url_download_nl1 . '-' . $os . $bits . $extension . '" title="Download from The Netherlands mirror #1"><li>NL 1</li></a>
							<a id="do_download" target="_blank" href="' . $url_download_nl2 . '-' . $os . $bits . $extension . '" title="Download from The Netherlands mirror #2"><li>NL 2</li></a>
						</ul>';
					} ?>

				<div class="post_header">
					<div class="introduction">
						<h1>Blender <?=$current_version?></h1>
						Blender <?=$current_version?> is the latest release from the <a href="<?=get_site_url() . '/foundation'?>">Blender Foundation</a>.
						To download it, please select your platform and location. Blender is Free & Open Source Software.
						<br/><br/>
						Blender <?=$current_version?> was released on <?=$release_date?>
					</div>
				</div>
				<div class="clearfix"></div>
				<h1>Other Operating Systems</h1>
				<ul class="nav nav-tabs">
				  <li class="active windows"><a id="active_windows" href="#windows" data-toggle="tab">Windows</a></li>
				  <li><a id="active_osx" href="#osx" data-toggle="tab">Mac OSX</a></li>
				  <li><a id="active_linux" href="#linux" data-toggle="tab">Linux</a></li>
				  <li><a id="active_source" href="#source" data-toggle="tab">Source Code</a></li>
				</ul>
				<div class="tab-content windows" id="tab-content">
				  <div class="tab-pane fade in active" id="windows">
				  	<? $os = 'windows';?>
				  	<div class="header">
				  		<div class="title">
				  			<h1><i class="icon-logo-windows"></i> Blender <?=$current_version?> for Windows</h1>
				  			<h4>Compatible with Windows XP / Vista / 7 / 8</h4>
						</div>
				  		<div class="depth border-left">
							<h1>32<small>bit</small></h1>
				  		</div>
				  		<div class="depth">
							<h1 class="32">64<small>bit</small></h1>
				  		</div>
				  	</div>
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
			  			<h2>Installer</h2>
						<? download_links($os, 32, '.exe'); ?>
						<? download_links($os, 64, '.exe'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- Installer-->
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>.ZIP</h2>
						<? download_links($os, 32, '.zip'); ?>
						<? download_links($os, 64, '.zip'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- .ZIP-->
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>.7z</h2>
						<? download_links($os, 32, '.7z'); ?>
						<? download_links($os, 64, '.7z'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- 7z-->
				 <div class="clearfix"></div>
				 <div class="alert alert-info">
				 	<i class="icon-info-sign"></i>
				 	<p>If the application reports an error on startup, please install the Visual C++ 2008 Redistributable Package.
				 	<a href="http://www.microsoft.com/en-us/download/details.aspx?id=29">32bit</a> / 
				 	<a href="http://www.microsoft.com/en-us/download/details.aspx?id=15336">64bit</a></p>
			 	 </div>
			  	 </div> <!-- // WINDOWS -->

				  <div class="tab-pane fade" id="osx">
				  	<? $os = 'OSX_10.6';?>
				  	<div class="header">
				  		<div class="title">
				  			<h1><i class="icon-logo-apple"></i>Blender <?=$current_version?> for Mac OSX</h1>
				  			<h4>Requires Mac OS X 10.6+</h4>
						</div>
				  		<div class="depth border-left">
							<h1>32<small>bit</small></h1>
				  		</div>
				  		<div class="depth">
							<h1>64<small>bit</small></h1>
				  		</div>
				  	</div>
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>.ZIP</h2>
						<? download_links($os, '-i386', '.zip'); ?>
						<? download_links($os, '-x86_64', '.zip'); ?>
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

				  <div class="tab-pane fade" id="linux">
				  	<? $os = 'linux-glibc211';?>
				  	<div class="header">
				  		<div class="title">
				  			<h1><i class="icon-tux"></i> Blender <?=$current_version?> for GNU / Linux</h1>
				  			<h4>Requires glibc 2.11. Includes Python 3.3, FFmpeg<br/>
				  				Suits most recent Linux distributions</h4>
						</div>
				  		<div class="depth border-left">
							<h1>32<small>bit</small></h1>
				  		</div>
				  		<div class="depth">
							<h1>64<small>bit</small></h1>
				  		</div>
				  	</div>
				  	<div class="package">
				  		<div class="icon"><i class="icon-folder-close-alt"></i></div>
				  		<h2>Tarball .bz2</h2>
						<? download_links($os, '-i686', '.tar.bz2'); ?>
						<? download_links($os, '-x86_64', '.tar.bz2'); ?>
						<div class="clearfix"></div>
						<?=$choose_mirror?>
				  	</div> <!-- // tar.bz2-->
				 <div class="clearfix"></div>
				  </div> <!-- LINUX -->

				  <!-- SOURCE -->
				  <div class="tab-pane fade" id="source">
				  	<div class="header">
				  		<div class="title">
				  			<h1>Source Code for Blender <?=$current_version?></h1>
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
				<hr/>
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
				</div>

 				<?php endwhile; // end of the loop. ?>
				</div> <!-- // span8 -->
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

<script type="text/javascript">
	$(document).ready(function(){
		var padding = 15;
		$('.tab-content').height($('#windows').height() + padding);
		
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

	});
</script>
<?php get_footer('sitemap'); ?>
<?php get_footer(); ?>