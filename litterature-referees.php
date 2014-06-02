<?php
/*
Template Name: Litterature & References Page
*/
?>
<?php get_header(); ?>

<div class="container add-top ">

  <div class="row">
  <div class="col-md-12">  
  <div class="search"><label>Start typing: <input type="search" id="searchInput" /></label> <button type=button id="clearSearch">Clear</button></div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div id="mainContainer"></div>
    
          <script type="text/template" id="tmplt-Movies">
           
          </script>
          <script type="text/template" id="tmplt-Movie">
          <div class="pevivabox">
          <a href="<%= Url %>">
          <div><%= Title %> </div>
          <div><i class="auth-ico"></i><p><%= Author %> </p></div>
          <div><i class="auth-ico"></i><p><%= Referee %></p></div>
          <div><%= ReleaseYear %> </div>
          </a>
          </div>
          </script> 


    <script src="<?php bloginfo('template_directory') ?>/library/js/libs/jquery-1.7.1.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/library/js/libs/underscore.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/library/js/libs/backbone.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/library/js/referees.js" type="text/javascript"></script>   
        
    </div>

  </div>
</div>

<script type="text/javascript">
  
  var elementList = $('#mainContainer').find('div');

  console.log(elementList.length,"ANANRS");
  $('#searchInput').keyup(function(eve){
      searchString=$(this).val().toLowerCase();
  searchArray=searchString.split(' ');
  var len = searchArray.length;
  console.log(len,"SKIT");
  elementList.each(function(index,elem){
        $eleli = $(elem)
        $eleli.removeClass('hideThisLine');
        var oneLine = $eleli.text().toLowerCase()
        match = true,
        sal = len;
        while(sal--){
          if( oneLine.indexOf( searchArray[sal] ) == -1 ){
            match = false;
          }
        }
        if(!match){
          console.log('this one is gets hidden',searchString);
          $eleli.addClass('hideThisLine');
        }
      });
      $('.dontShow').removeClass('dontShow');
      $('.hideThisLine').addClass('dontShow');
    });
  $('#clearSearch').click(function (e){
    $('#cBuscador').val('').keyup();
  });


</script>
<?php get_footer(); ?>