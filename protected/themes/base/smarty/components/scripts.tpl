{strip}
{compress
    attr   = 'data-no-instant'
    mode   = 'js'
    source = [
        [ 'file' => '/js/vendor.min.js' ],
        [ 'file' => '/js/app.min.js' ]
    ]
} 

  {*<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>*}
  <script type="text/javascript" src="/js/main.js"></script>
  <script type="text/javascript" src="/js/my.js"></script>
  <script>
    $(document).ready(function() {
        $('#share').click(function() {
            console.log('ok');
        });
    });
  </script>
</body>
</html>
{/strip}

    


    