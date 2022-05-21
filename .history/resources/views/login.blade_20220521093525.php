<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <style>
            body{
                background-color: #0c101d;
            }
            .card{
                border: none;
                border-top: 5px solid  rgb(238, 61, 7);
                background: #393949;
                color: #57557A;
            }
            p{
                font-weight: 600;
                font-size: 15px;
            }
            .fab{
                display: flex;
                justify-content: center;
                align-items: center;
                border: none;
                background: #2A284D;
                height: 40px;
                width: 90px;
            }
            .fab:hover{
                cursor: pointer;
            }
            .fa-twitter{
                color: #56ABEC;
            }
            .fa-facebook{
                color: #1775F1;
            }
            .fa-google{
                color: #CB5048;
            }
            .division{
                float: none;
                position: relative;
                margin: 30px auto 20px;
                text-align: center;
                width: 100%;
                box-sizing: border-box;
            }
            .division .line{
                border-top: 1.5px solid #57557A;;
                position: absolute;
                top: 13px;
                width: 85%;
            }
            .line.l{
                left: 52px;
            }
            .line.r{
                right: 45px;

            }
            .division span{
                font-weight: 600;
                font-size: 14px;
            }
            .myform{
                padding: 0 25px 0 33px;
            }
            .form-control{
                border: 1px solid #57557A;
                border-radius: 3px;
                background: #212042;
                margin-bottom: 20px;
                letter-spacing: 1px;
                
            }
            .form-control:focus{
                border: 1px solid #57557A;
                border-radius: 3px;
                box-shadow: none;
                background: #212042;
                color: #fff;
                letter-spacing: 1px;
            }
            .bn{
                text-decoration: underline;
            }
            .bn:hover{
                cursor: pointer;
            }
            .form-check-input {
                margin-top: 8px!important;
                }
            .btn-primary{
            background: linear-gradient(135deg,  rgb(240, 94, 49) 39%, rgb(238, 61, 7) 101%);
            border: none;
            border-radius: 50px;
            }
            .btn-primary:focus{
                box-shadow: none;
                border: none;
            }
            small{
                color: #F2CEFF;
            }
            .far.fa-user{
                font-size: 13px;
            }

            @media(min-width: 767px){
                .bn{
                    text-align: right;
                }
            }
            @media(max-width: 767px){
                .form-check{
                    text-align: center;
                }
                .bn{
                    text-align: center;
                    align-items: center;
                }
            }
            @media(max-width: 450px){
                .fab{
                    width: 100%;
                    height: 100%;
                }
                .division .line{
                    width: 50%;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card py-3 px-2">
                        <p class="text-center mb-3 mt-2" style="color: #CB5048">YPC-Pay</p>
                        {{-- <div class="row mx-auto ">
                            <div class="col-4">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="col-4">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <div class="col-4">
                                <i class="fab fa-google"></i>
                            </div>
                        </div> --}}
                        <div class="division">
                            <div class="row">
                                <div class="col-3"><div class="line l"></div></div>
                                <div class="col-6"><span>LOGIN</span></div>
                                <div class="col-3"><div class="line r"></div></div>
                            </div>
                        </div>
                        <form class="myform">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Username">
                              </div>
                             <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      {{-- <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Rester connecte</label>
                                      </div> --}}
                                  </div>
                                  {{-- <div class="col-md-6 col-12 bn">Mot se passe oublie</div> --}}
                              </div>
                              <div class="form-group mt-3">
                                  <button type="button" class="btn btn-block btn-primary btn-lg"><small>Login</small></button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
