<!DOCTYPE html>
<html>
  <head>
    <title>Production Diary | Grey Matter @ Edinburgh Fringe</title>
    <meta name="author" content="Alex Forey">
    <meta name="title" content="Production Diary | Grey Matter @ Edinburgh Fringe">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <nav>
      <ul>
        <li><a href="http://greymatterplay.com/origins">Origins</a></li>
        <li><a href="http://greymatterplay.com/images">Images</a></li>
        <li class="title"><a href="/">Grey Matter</a></li>
        <li><a href="http://diary.greymatterplay.com" class="blog"><span>Production Diary</span></a></li>
        <li><a href="http://greymatterplay.com/tickets" class="book">Tickets</a></li>
      </ul>
    </nav>

    <section class="bigbox">
    </section>


    <section>
      <div class="container">

        <div class="box">
          <h1>Production Diary</h1>

          {block:Posts}

          {block:Photo}
          <article id="{PostID}" class="photo">
            {LinkOpenTag}
              <img src="{PhotoURL-1280}" alt="{PhotoAlt}">
            {LinkCloseTag}
            <div class="info">
              <time><a href="{Permalink}">{DayOfMonthWithZero} {ShortMonth} {Year}</a></time>
              {block:Caption}
                <p>{Caption}</p>
              {/block:Caption}
            </div>
            <div style="clear: both"></div>
          </article>
          {/block:Photo}

          {block:Photoset}

          <article id="{PostID}" class="photoset">
            <div class="set">
              <div class="set-container">
                {block:Photos}
                  <a href="{PhotoURL-HighRes}"><img src="{PhotoURL-1280}" alt="{PhotoAlt}"></a>
                {/block:Photos}
              </div>
            </div>
            <div class="info">
              <time><a href="{Permalink}">{DayOfMonthWithZero} {ShortMonth} {Year}</a></time>
              {block:Caption}
                <p>{Caption}</p>
              {/block:Caption}
            </div>
            <div style="clear: both"></div>
          </article>

        </div>

      </div>
    </section>


    <footer class="container">
      <div class="contact">
        <script type="text/javascript">
          //<![CDATA[
          <!--
          var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
          "=73){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
          ".substr(0,ol);}f(\")49,\\\"hbjymp,cwtk420\\\\ 06j1'54VII320\\\\H_^YZ_230\\\\"+
          "Y\\\\\\\\Q730\\\\INB]^N^]IJ_@VDr\\\\610\\\\230\\\\ojit9E*vab/jf`;;!]r\\\\t\\"+
          "\\Z420\\\\730\\\\520\\\\730\\\\5L0Wr\\\\n\\\\020\\\\310\\\\420\\\\~~600\\\\" +
          "597|)/ ::#06!SE_JQtFSOXDGE630\\\\MTru{u4H/vk~b(g8 (320\\\\720\\\\430\\\\300" +
          "\\\\430\\\\100\\\\600\\\\A130\\\\500\\\\410\\\\n\\\\020\\\\000\\\\610\\\\;\\"+
          "\"(f};o nruter};))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y;++y)49" +
          "<i(fi{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"       ;
          while(x=eval(x));
          //-->
          //]]>
        </script>

        <a href="https://twitter.com/greymatterplay"><img src="http://greymatterplay.com/images/twitter.svg"></a>
        <a href="https://facebook.com/greymatterplay"><img src="http://greymatterplay.com/images/facebook.svg"></a>
        <a href="https://instagram.com/greymatterplay"><img src="http://greymatterplay.com/images/instagram.svg"></a>
        <a href="http://diary.greymatterplay.com"><img src="http://greymatterplay.com/images/tumblr.svg"></a>
      </div>
      <p>&copy; SPASM 2016. Designed by <a href="https://alexforey.com">Alex Forey</a></p>
    </footer>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="scripts/jquery.fitvids.js"></script>
      <script>
        $(".container").fitVids();

        $(function() {
          var imageWidth = parseInt($('.set-container img').css('width'), 10);
          $('.set-container').width($(".set-container img").length * imageWidth);
        });

      </script>

  </body>

</html>
