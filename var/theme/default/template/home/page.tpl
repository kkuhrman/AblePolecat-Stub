<html>
  <head>
    <title>{!AblePolecat_Stub.Title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{!AblePolecat_Stub.themeUrl}/stylesheets/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="{!AblePolecat_Stub.themeUrl}/stylesheets/style.css">
    <link rel="stylesheet" href="{!AblePolecat_Stub.themeUrl}/stylesheets/custom.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12 md8 l8">
          <div class="post-index z-depth-1">
            <h5>Able Polecat Stub Project</h5>
            <p>This project comprises all the essential files necessary to set 
            up a project using the Able Polecat core class library and project 
            installation tool with conventional Able Polecat project 
            configuration practices.</p>
          </div> <!-- post-index -->
        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- container -->
    <!-- jQuery is required by Materialize to function. -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script type="text/javascript">
      //custom JS code
      $(document).ready(function(){
        $('.materialboxed').materialbox();
        $('.modal-trigger').leanModal();
      });
    </script>

    <script type="text/javascript">
      function CopyMe(oFileInput, sTargetID) {
        var arrTemp = oFileInput.value.split('\\');
        document.getElementById(sTargetID).value = arrTemp[arrTemp.length - 1];
      }
    </script>
  </body>
</html>