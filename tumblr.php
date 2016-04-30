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
        var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
        "x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
        " r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!88{)rt{y+xx=l;=+;" +
        "lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
        "\"(1)11\\\\,j\\\"t`ng)txib|[bKL30\\\\0X\\\\Q[IC05\\\\0[\\\\CCMC>w%Ffu0aai4c" +
        "&8\\\\^\\\\\\\"!\\\\4F03\\\\\\\\33\\\\01\\\\00\\\\\\\\32\\\\05\\\\00\\\\\\\\"+
        "OO4700\\\\\\\\10\\\\06\\\\00\\\\\\\\0M03\\\\\\\\1>++!20'\\\"\\\\\\\\\\\\.4 " +
        ";05\\\\07\\\\\\\"\\\\\\\\\\\\I^VU7T01\\\\\\\\\\\\\\\\\\\\\\\\CEJD5D00\\\\\\" +
        "\\6y03\\\\\\\\zGsov91)a9nan}twn/\\\\\\\\22\\\\07\\\\03\\\\\\\\25\\\\03\\\\0" +
        "0\\\\\\\\27\\\\05\\\\03\\\\\\\\24\\\\0\\\\\\\\(\\\"}fo;n uret}r);+)y+^(i)t(" +
        "eAodrCha.c(xdeCoarChomfrg.intr=So+7;12%=;y++)y11<1(iif){++;i<l;i=0(ior;fthn" +
        "glex.l=\\\\,\\\\\\\"=\\\",o iar{vy)x,f(n ioctun\\\"f)\")"                    ;
        while(x=eval(x));
        //-->
        //]]>
        </script>
        <a href="https://twitter.com/greymatterplay"><img src="images/twitter.svg"></a>
        <a href="https://facebook.com/greymatterplay"><img src="images/facebook.svg"></a>
        <a href="https://instagram.com/greymatterplay"><img src="images/instagram.svg"></a>
        <a href="http://diary.greymatterplay.com"><img src="images/tumblr.svg"></a>
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
