<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/contribute.css?v=1" rel="stylesheet">

<div class="background contribute-background">
	<div class="container">
		<div class="col-md-6 topheader">
			<h1><?php echo $l->t('Get involved!');?></h1>
			<h2><?php echo $l->t('Nextcloud is an <strong>open source project</strong> and an open company. That means it is <em>yours</em> to make a difference!');?></h2>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p class="section--paragraph"><?php echo $l->t('We invite you to join our <a class="hyperlink" href="https://github.com/nextcloud" target="_blank">development efforts on GitHub</a> and the conversations on <a class="hyperlink" href="https://help.nextcloud.com" target="_blank">our forums</a>. Interact with us on our <a class="hyperlink" href="/news">blogs and social media channels</a>, too!');?></p>
            <p class="section--paragraph"><?php echo $l->t('Do you want to get a certain improvement in Nextcloud? Did you find a problem? Do you want to help translate, promote or document Nextcloud?');?></p>
        </div>
	</div>
</div>
</section>
<section class="section--contribute">
<div class="container">

    <div class="row">
        <h1 class="section--heading-1 text-center"><?php echo $l->t('Become part of the Community.');?></h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/conference/grouppic2017-small.jpg" class="img-responsive" />
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/conference/grouppic2016_wee.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <h3 class="section--paragraph__title"><?php echo $l->t('Contribute to Nextcloud server or apps');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Learn about setting up a development environment or read our security guidelines, coding style and more!');?></p>
            <p class="section--paragraph"><?php echo $l->t('Improve the Nextcloud Server:');?> <a class="hyperlink"  href="<?php echo $DOCUMENTATION_DEVELOPER; ?>core"><?php echo $l->t('server development documentation');?></a>, <a class="hyperlink" href="<?php echo $DOCUMENTATION_DEVELOPER; ?>general"><?php echo $l->t('general guidelines and setup');?></a></p>
            <p class="section--paragraph"><?php echo $l->t('Get a bug fixed:');?> <a class="hyperlink"  href="<?php echo $DOCUMENTATION_BUGTRACKER; ?>"><?php echo $l->t('bugtracker documentation');?></a></li>
            <p class="section--paragraph"><?php echo $l->t('Learn to write Nextcloud code. (Try your hands on a <a class="hyperlink"  href="https://github.com/nextcloud/server/labels/good%20first%20issue" target="_blank">good first issue</a> or get started with <a class="hyperlink" href="https://nextcloud.com/blog/get-involved-in-nextcloud-by-reviewing-pulls/">reviewing pull requests</a>)');?></li>
            <p class="section--paragraph"><a class="hyperlink" href="https://transifex.com/nextcloud"><?php echo $l->t('Help translate Nextcloud.');?></a></li>
            <p class="section--paragraph"><?php echo $l->t('Talk to us on our
            <a class="hyperlink" href="https://help.nextcloud.com" target="_blank">forum</a>! We look forward to your code and thoughts.');?></p>
            <a class="button button--blue" href="<?php echo home_url('developer') ?>"><?php echo $l->t('Learn more about writing Nextcloud apps');?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/events/booth.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <h3 class="section--paragraph__title"><?php echo $l->t('Answer questions about Nextcloud use and development');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Help answer questions users and developers have about Nextcloud!');?></p>
            <p class="section--paragraph"><a class="button button--blue button--arrow" href="https://help.nextcloud.com"><?php echo $l->t('Join the Nextcloud forums');?></a></p>
            <p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('code-of-conduct') ?>"><?php echo $l->t('Please be considerate of our code of conduct</a>. We want to provide a positive and enjoyable environment for everybody.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/atwork-small.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <h3 class="section--paragraph__title"><?php echo $l->t('Test Nextcloud');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Testing upcoming Nextcloud Server releases is the best way of making sure the new release can do what you need it to do. And of course, only if you report a problem to us we know about it and can fix it! If you have a bug to report,
                see the <a class="hyperlink" href="https://github.com/nextcloud/server/blob/master/.github/CONTRIBUTING.md">issue submission page</a>.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/design-small.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <h3 class="section--paragraph__title"><?php echo $l->t('Design Nextcloud');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Help out with Nextcloud user interaction design or graphic design!');?> <a class="hyperlink"  href="<?php echo home_url('design') ?>"><?php echo $l->t('Get involved on the design page!');?></a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/headers/ladies-that-foss.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <h3 class="section--paragraph__title"><?php echo $l->t('Do an internship or work at Nextcloud');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud occasionally hires contributors as interns. It is best to ask the employees you work with about this, or send an inquiry to our jobs email address. To help equallize opportunities for tech jobs for people in underrepresented groups in tech, we have our Include program. You can submit a request for mentoring there, which can turn into an internship as well.');?> <a class="hyperlink" href="<?php echo home_url('include') ?>"><?php echo $l->t('Learn more about Include here.');?></a></p>
            <p class="section--paragraph"><a class="hyperlink" href="<?php echo home_url('jobs') ?>"><?php echo $l->t('Also, we are hiring.');?></a> <?php echo $l->t('We look especially for people who want to turn their passion into their job! When possible, we hire people from our active community base or from the wider open source community.');?></p>
        </div>
    </div>
        <div class="row">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/events/presentation.jpg" class="img-responsive" />
        </div>
        <div class="col-md-8">
            <h3 class="section--paragraph__title"><?php echo $l->t('Help promote Nextcloud');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Just telling other people about Nextcloud is already immensely helpful! Use social media, real life, or write a review at the many websites that review software. Some links below! You can also represent us at events, giving a talk for example.');?> <a class="hyperlink" href="<?php echo home_url('events') ?>"><?php echo $l->t('Learn more about Nextcloud events here.');?></a></p>
            <div class="row">
                <div class="col-md-3">
                    <!-- Begin SF Tag -->
                    <div class="sf-root" data-id="2973658" data-badge="light-default" style="width:100%">
                        <a href="https://sourceforge.net/software/product/NextCloud/" target="_blank">View NextCloud On SourceForge.net</a>
                    </div>
                    <script type="text/javascript">(function () {var sc=document.createElement('script');sc.type='text/javascript';sc.async=true;sc.src='https://b.sf-syn.com/badge_js?slug=NextCloud';var p=document.getElementsByTagName('script')[0];p.parentNode.insertBefore(sc, p);})();
                    </script>
                    <!-- End SF Tag -->
                </div>
                <div class="col-md-9">
                <a class="button button--white button--arrow" href="https://alternativeto.net/software/nextcloud/ 81">Alternative.to</a>
                <a class="button button--white button--arrow" href="https://www.capterra.com/reviews/161572/NextCloud/new">Capterra</a>
                <a class="button button--white button--arrow" href="https://www.g2crowd.com/products/nextcloud/take_survey">G2Crowd</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="calltoaction">
		<h1 class="section--heading-2 section--text--center"><?php echo $l->t('Let\'s make Nextcloud Rock!');?></h1>
		<p class="section--paragraph section--text--center"><?php echo $l->t('If you have any questions, <a class="hyperlink" href="https://help.nextcloud.com">our community is happy to help you</a>.');?></p>
</div>
