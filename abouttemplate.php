<?php
/*
Template Name: abouttemplate
*/
?>

<style type="text/css">
    .about-avatar {
        float: left;
        margin-left: 10%;
        height: 130px;
    }

    .about-info {
        margin-top: 5%;
        font-size: 1.2em;
        float: left;
        margin-left: 10%;
    }

    table a
    {
        display:block;
        text-decoration:none;
    }
</style>
</style>
<script type="text/javascript">
    function fitCell(){
        if ( $('.author-cell').width() <= $('.about-avatar').width() + $('.about-info').width() ){
            $('.about-info').css({
                'float' : 'left',
                'margin-top' : '1%'
            });
        }
        else {
            $('.about-info').css({
                'float' : 'right',
                'margin-top' : '5%'
            });
        }

    }

    $(document).ready(){
        fitCell();
    }

    $(window).resize(fitCell());

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
                    $authors = get_users();
                    $chunkedAuthors = array_chunk($authors, 3);
                 ?> 

                <?php ?>
                <table> 
                    <tbody>
                        <?php foreach ($chunkedAuthors as $currRow): ?>
                        <tr>
                            <?php foreach ($currRow as $curauth): ?>
                            
                                <td class = "author-cell" width="15%">
                                    <a href = "<?php echo get_author_posts_url($curauth->ID) ?>">
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
                    </tbody>
                </table>
                    
                <!--END .post-content -->
                </div>
                
            <!--END .hentry-->  
            </div>
        </div>
        <!-- /#hentry-wrap -->
        
    </div><!-- #content -->
<?php get_footer(); ?>