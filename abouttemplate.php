<?php
/*
Template Name: abouttemplate
*/
?>

<style type="text/css">
    .author-cell a {
        width: 160px;
        margin: auto;
    }

    .about-avatar {
        float: left;
        margin: auto;
        height: 200px;
    }

    .about-info {
        margin-top: 5%;
        font-size: 1.2em;
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
        
        
        <!-- #hentry-wrap -->
        <div id="hentry-wrap">
            
            <!--BEGIN .hentry -->
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
        </div>
        <!-- /#hentry-wrap -->
        
    </div><!-- #content -->
<?php get_footer(); ?>