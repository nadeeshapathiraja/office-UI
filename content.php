<!doctype HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script src="js/accordion.js" type="text/javascript"></script>
<LINK REL=STYLESHEET HREF="css/style.css" TYPE="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../../assets/examples/css/forms/layouts.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
<style>.accordion_container {
    width: 500px;
}
.accordion_head {
    background-color:skyblue;
    color: white;
    cursor: pointer;
    font-family: arial;
    font-size: 14px;
    margin: 0 0 1px 0;
    padding: 7px 11px;
    font-weight: bold;
}
.accordion_body {
    background: lightgray;
}
.accordion_body p {
    padding: 18px 5px;
    margin: 0px;
}
.plusminus {
    float:right;
}</style>
</head>

<body>
<form action="#">

    <div class="form-group row">
        <div class="col-md-9">
            <button type="button" class="btn btn-primary">Save </button>
            <button type="reset" class="btn btn-primary">Cancel</button>
        </div>
    </div>    
    <!-- <div class="accordion_container"> -->
        <div class="accordion_head">GENERAL INFORMATION<span class="plusminus">+</span>
        </div>
        <div class="accordion_body" style="display: none;">

            <div class="row">
                 <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Name: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Office Phone: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Email Address: </label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" name="email" placeholder="email@example.com" autocomplete="off" />
                    </div>
                </div>

                More Links: <span class="fa fa-plus add"></span>
                <div class="appending_div">
                    <div>
                        Link URL: <input type="text" name="blog_linku_one[]"> &nbsp; Link Name:  <input type="text" name="blog_linkn_one[]">
                    </div>
                </div>
                
                <script>
                    $(document).ready(function() {
                        var i = 1;
                        $('.add').on('click', function() {
                            var field = '<br><div>Link URL '+i+': <input type="text" name="blog_linku_one[]"> &nbsp; Link Name '+i+':  <input type="text" name="blog_linkn_one[]"></div>';
                            $('.appending_div').append(field);
                            i = i+1;
                        })
                    })
                </script>

                <div class="form-group col-md-2">
                    <label class="col-md-3 col-form-label">Primary</label>
                    <div class="radio-custom radio-default radio-inline">
                        <input type="radio" id="_inputHorizontalFemale" name="inputRadiosMale2" checked/>
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="col-md-3 col-form-label">Opted Out</label>
                    <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember1" name="inputCheckbox"  autocomplete="off"/>
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label class="col-md-3 col-form-label">Invalid</label>
                    <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember1" name="inputCheckbox"  autocomplete="off"/>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Website:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"  autocomplete="off"/>
                        </div>         
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Fax:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"  autocomplete="off"/>
                        </div>
                </div>
            </div>

        </div>

        <div class="accordion_head">MORE INFORMATION<span class="plusminus">+</span>
        </div>
        <div class="accordion_body" style="display: none;">
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Type:</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option></option>
                            <option>Analyst</option>
                            <option>Competitor</option>
                            <option>Customer</option>
                            <option>Integrator</option>
                            <option>Investor</option>
                            <option>Partner</option>
                            <option>Press</option>
                            <option>Prospect</option>
                            <option>Reseller</option>
                            <option>Other</option>
                        </select>
                            <!-- <input type="text" class="form-control" name="name"  autocomplete="off"/> -->
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Industry:</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option></option>
                            <option>Apparel</option>
                            <option>Banking</option>
                            <option>Biotechnology</option>
                            <option>Chemicals</option>
                            <option>Communications</option>
                            <option>Construction</option>
                            <option>Consulting</option>
                            <option>Education</option>
                            <option>Electronics</option>
                            <option>Energy</option>
                            <option>Engineering</option>
                            <option>Entertainment</option>
                            <option>Environmental</option>
                            <option>Finance</option>
                            <option>Government</option>
                            <option>Healthcare</option>
                            <option>Hospitality</option>
                            <option>Insurance</option>
                            <option>Machinery</option>
                            <option>Manufacturing</option>
                            <option>Media</option>
                            <option>Not For Profit</option>
                            <option>Recreation</option>
                            <option>Retail</option>
                            <option>Shipping</option>
                            <option>Technology</option>
                            <option>Telecommunications</option>
                            <option>Transportation</option>
                            <option>Utilities</option>
                            <option>Other</option>
                        </select>
                            <!-- <input type="text" class="form-control" name="name"  autocomplete="off"/> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Member of:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"  autocomplete="off"/>
                        </div>         
                </div>
            </div>

        </div>

        <div class="accordion_head">ADDRESS INFORMATION<span class="plusminus">+</span>
        </div>
        <div class="accordion_body" style="display: none;">

            <div class="row">        
                    <div class="form-group col-md-6">
                        <h6 class="example-title">Billing Address</h6>
                    </div>

                    <div class="form-group col-md-6">
                        <h6 class="example-title">Shipping Address</h6>
                    </div>
            </div>

            <div class="row">        
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Street: </label>
                    <div class="col-md-9">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Street: </label>
                    <div class="col-md-9">
                        <textarea class="form-control" ></textarea>
                    </div>
                </div>
            </div>    

            <div class="row">    
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">City: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">City: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>
            </div>

            <div class="row">    
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">State/Region: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">State/Region: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>
            </div>

            <div class="row">    
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Postal Code: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Postal Code: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>
            </div>

            <div class="row">    
                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Country: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Country: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                </div>

                <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Copy address from left:</label>
                    <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember1" name="inputCheckbox"  autocomplete="off"/>
                    </div>
                </div>
            </div>
            

        </div> 
        
        <div class="accordion_head">DATA ASSIGNMENT<span class="plusminus">+</span>
        </div>
        <div class="accordion_body" style="display: none;">

            <div class="row">
                 <div class="form-group col-md-6">
                    <label class="col-md-3 col-form-label">Assigned to: </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  autocomplete="off"/>
                    </div>
                </div>

            </div>

        </div>
        <br>
        <div class="form-group row">
            <div class="col-md-9">
                <button type="button" class="btn btn-primary">Save </button>
                <button type="reset" class="btn btn-primary">Cancel</button>
            </div>
        </div>
    <!-- </div> -->
</form>

    

</body>
</html>
<script>
    $(document).ready(function () {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function () {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});
</script>