<?php
/*
Template Name: abouttemplate
*/
?>

<?php get_header(); ?>

<style type="text/css">
<<<<<<< HEAD
    .author-cell a {
        width: 160px;
        margin: auto;
    }

    .about-avatar {
        float: left;
        margin: auto;
        height: 200px;
=======
    .author-cell {
        padding: 0;
        width: 33%;
    }

    .author-link {
        width: 100%;
        margin: auto;
    }

    .author-inner{
        width: 100%;
        margin:auto;
    }

    .avatar-wrap {
        width: 100%;
        margin: 0;
    }
    .about-avatar {
        width: 160px;
        height: 200px;
        margin: 10px auto;
    }

    .about-avatar img{
        width: 160px;
>>>>>>> e6917d67a1e73d38896c6de980c2c92c0a64dbca
    }

    .about-info {
        font-size: 1.2em;
<<<<<<< HEAD
        float: left;
        width:  160px;
        text-align: center;
        color: black;
    }

    table a
    {
        display:block;
        text-decoration:none;
    }
</style>
</style>
<script type="text/javascript">

</script>
<?php get_header(); ?>

    <!--BEGIN #content -->
    <div id="content">  
        
=======
        width:  100%;
        text-align: center;
        color: black;
        position: relative;
        z-index: 2;
    }

    .about-info a{
        width:245px;
        margin:auto;
    }

    table a {
        display:block;
        text-decoration:none;
    }

    .author-table tr:nth-child(odd) td {
        background-color: transparent;
    }

    .author-table tr td:hover {
        background: rgba(0,0,0,0.05);
    }

    tr:nth-child(even) {
        background-color: #f4f4f4;
    }

    .page-template-abouttemplate-php #content .post-content{
        padding:0;
    }

</style>
<script type="text/javascript">
    // function fitCell(){
    //     if ( $('.author-cell').width() <= $('.about-avatar').width() + $('.about-info').width() ){
    //         $('.about-info').css({
    //             'float' : 'left',
    //             'margin-top' : '1%'
    //         });
    //     }
    //     else {
    //         $('.about-info').css({
    //             'float' : 'right',
    //             'margin-top' : '5%'
    //         });
    //     }

    // }

    // $(document).ready(){
    //     fitCell();
    // }

    // $(window).resize(fitCell());

</script>
    <!--BEGIN #content -->
    <div id="content">  
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
>>>>>>> e6917d67a1e73d38896c6de980c2c92c0a64dbca
        
        <!-- #hentry-wrap -->
        <div id="hentry-wrap">
            
            <!--BEGIN .hentry -->
<<<<<<< HEAD
            <div> 
                
                <!--BEGIN .post-header-->
                <div class="post-header">
                    <div class="inner">
                        <h2 class="post-title">Meet the team</h2>
                        <h1 class="post-title">1T2 - 1T3</h1>
                    </div>
                <!--END .post-header -->
                </div>
                    
                <!--BEGIN .post-content -->
                <div class="post-content">

                 <?php 
                    $authors = get_users('orderby=post_count');
                    $topmen = [];
                    // Sorts array of authors, so top people are first
                    // NOTE: uses first names, so very temporary/fragile!
                    foreach ($authors as $key => $author) {
                        if ($author->$first_name =='Ashkan'){
                            array_unshift($topmen,  $author);
                            unset($authors[$key]);
                        }
                        if ($author->first_name == 'Luke'){
                            array_push($topmen,  $author);
                            unset($authors[$key]);
                        }

                        $authors = array_merge($topmen, $authors);
                    }
                    $chunkedAuthors = array_chunk($authors, 3); 
                ?>

                <?php ?>
                <div classs = "table"> 
                    <!-- <tbody> -->
                        <?php foreach ($chunkedAuthors as $currRow): ?>
                        <tr>
                            <?php foreach ($currRow as $curauth): ?>
                            
                                <td class = "author-cell">
                                    <a class = "author-link" href = "<?php echo get_author_posts_url($curauth->ID) ?>">
                                    <img class = "about-avatar"
                                        src = " <?php echo bloginfo('template_directory');?>/images/authors/<?php echo $curauth->first_name ?>-web.jpg"
                                    />
                                    <?php 
                                        $info = $curauth->first_name.' '.$curauth->last_name."<br />".$curauth->aim."<br />".$curauth->yim; 
                                    ?>
                                    <div class = "about-info"><?php echo $info ?></div>
                                    </a>
                                </td>
                            
                            <?php endforeach; ?>
                        </tr>
                        <?php endforeach; ?>
                    <!-- </tbody> -->
                </div>
                    
                <!--END .post-content -->
                </div>
                
            <!--END .hentry-->  
            </div>
=======
        	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                
                <!--BEGIN .post-header-->
                <div class="post-header">
                    <div class="inner">
                        <h2 class="post-title">About The Cannon</h2>
                        <p style="text-align: left; font: normal 13px/1.8 'Merriweather', serif;">The Cannon is the official newspaper of the University of Toronto <a href="http://skulepedia.ca/wiki/Engineering_Society" title="Engineering Society" target="_blank">Engineering Society</a>.
                        Established in 1978, it serves the undergraduate students of the Faculty of Applied Science and Engineering, with a circulation of up to 4000 across the University of Toronto campus.
                        It is one of two newspapers funded by the Engineering Society, and is the more serious of the two.</p>
                        <h2 class="post-title" style="padding: 0; background:none;">Meet the team</h2>
                        <h2 class="post-title">1T2 - 1T3</h2>
                    </div>
                <!--END .post-header -->
                </div>
                    
                <!--BEGIN .post-content -->
                <div class="post-content">

                 <?php /*
                    $authors = get_users('orderby=mata_value');
                    $args = array(
                        'orderby'  => 'meta_value',
                        'order' => 'ascending',
                        'meta_key' => 'order',
                        'meta_query' => array(
                        ), // End of meta_query
                        'exclude' => array(
                            1
                        ),
                    );
                    $q = new WP_User_Query($args);*/

                    $order = $wpdb->get_results("SELECT DISTINCT user_id FROM $wpdb->usermeta WHERE meta_key='order' ORDER BY meta_value ASC", "ARRAY_N");
                    $authors = array();
                    foreach($order as $aid)
                        $authors[] = new WP_User($aid[0]);


                    $chunkedAuthors = array_chunk($authors, 3);
                    $count = 0;
                 ?> 
                <table class="author-table"> 
                    <tbody>
                        <?php foreach ($chunkedAuthors as $currRow) { ?>
                        <tr>
                            <?php foreach ($currRow as $curauth) { $count++; ?>
                            <td class="author-cell">
                            <div class="author-inner">
                                <a class="author-link" href="<?php echo get_author_posts_url($curauth->ID); ?>">
                                <div class="avatar-wrap">
                                    <div class="about-avatar"> <?php //echo $curauth; ?>
                                        <img src="<?php echo bloginfo('template_directory');?>/images/authors/<?php echo $curauth->first_name; ?>-web.jpg"/>
                                    </div>
                                </div></a>
                                <?php 
                                    $info = $curauth->first_name.' '.$curauth->last_name."<br />".$curauth->aim."<br />".$curauth->yim; 
                                    if ($count <= 10){
                                        if ($curauth->id == 36){
                                            $curauth_email = "arts.culture@cannon.skule.ca";
                                        }
                                        else{ $curauth_email = $curauth->user_email; }
                                        $info = $info . '<br /><a href="mailto:' .$curauth_email.'">'.$curauth_email."</a>";
                                    }
                                ?>
                                <div class="about-info"><?php echo $info ?></div>
                            </div>
                        </td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                    
                <!--END .post-content -->
                </div>
                
            <!--END .hentry-->  
            </div>

			<?php endwhile; else : ?>

			<?php endif; ?>
>>>>>>> e6917d67a1e73d38896c6de980c2c92c0a64dbca
        </div>
        <!-- /#hentry-wrap -->
        
    </div><!-- #content -->
<?php get_footer(); ?>