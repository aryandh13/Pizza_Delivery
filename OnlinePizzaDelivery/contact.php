<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <title>Contact Us</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <style>
       .icon-badge-group .icon-badge-container {
          display: inline-block;
        
        }
        .icon-badge-container {
          
          position: absolute;
        }
        .icon-badge-icon {
          font-size: 30px;
          color: rgb(0 0 0 / 50%);
          position: relative;
        }
        .icon-badge {
          background-color: #979797;;
          font-size: 10px;
          color: white;
          text-align: center;
          width: 15px;
          height: 15px;
          border-radius: 49%;
          position: relative;
          top: -35px;
          left: 17px;
        }
      .footer.container-fluid.bg-dark.text-light {
          position:fixed;
          bottom:0;
      }
      .contact2 {
        font-family: "Montserrat", sans-serif;
        color: #8d97ad;
        font-weight: 300;
        /* padding: 60px 0; */
        /* margin-bottom: 170px; */
        background-position: center top;
      }

      .contact2 h1,
      .contact2 h2,
      .contact2 h3,
      .contact2 h4,
      .contact2 h5,
      .contact2 h6 {
        color: #3e4555;
      }

      .contact2 .font-weight-medium {
        font-weight: 500;
      }

      .contact2 .subtitle {
        color: #8d97ad;
        line-height: 24px;
      }

      .contact2 .bg-image {
        background-size: cover;
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }

      .contact2 .card.card-shadow {
          -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
          box-shadow: 0px 0px 30px rgba(61, 109, 214, 0.774);
      }

      .contact2 .detail-box .round-social {
        margin-top: 100px;
      }

      .contact2 .round-social a {
        background: transparent;
        margin: 0 7px;
        padding: 11px 12px;
      }

      .contact2 .contact-container .links a {
        color: #8d97ad;
      }

      .contact2 .contact-container {
        position: relative;
        top: 107px;
      }

      .contact2 .btn-danger-gradiant {
        background: #ff4d7e;
        background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
        background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
        background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
        background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
        background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
      }

      .contact2 .btn-danger-gradiant:hover {
        background: #ff6a5b;
        background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
        background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
        background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
        background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
        background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
      }
    </style>
  </head>
  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_nav.php';?>

      <div class="contact2" style="background-image:url(img/map.jpg);height: 400px;" id="contact">
        <div class="container">
          <div class="row contact-container">
            <div class="col-lg-12">
              <div class="card card-shadow border-0 mb-4">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="contact-box p-4">
                      <div class="row">
                        <div class="col-lg-8">
                          <h4 class="title">Contact Us</h4>
                          <h5 class="title">Swati:9087675555</h5>
                          <h5 class="title">Vriti:8766790912</h5>
                          <h5 class="title">Srishti:8976436789</h5>
                          <h5 class="title">Aryan:6745896734</h5>


                        </div>
                         
                      </div>
                       
                       
                    </div>
                  </div>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       
  <?php include 'partials/_footer.php';?> 

    
     
  </body>
</html>