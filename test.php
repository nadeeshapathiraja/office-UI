
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Form Layouts | Remark Admin Template</title>
    
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
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

   
    
 


      <div class="page-content">
        <div class="panel">
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6">
                <!-- Example Basic Form (Form grid) -->
                <div class="example-wrap">
                  <h4 class="example-title">Basic Form (Form grid)</h4>
                  <div class="example">
                    <form autocomplete="off">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label class="form-control-label" for="inputBasicFirstName">First Name</label>
                          <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                            placeholder="First Name" autocomplete="off" />
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-control-label" for="inputBasicLastName">Last Name</label>
                          <input type="text" class="form-control" id="inputBasicLastName" name="inputLastName"
                            placeholder="Last Name" autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Gender</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputBasicMale" name="inputGender" />
                            <label for="inputBasicMale">Male</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputBasicFemale" name="inputGender" checked />
                            <label for="inputBasicFemale">Female</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicEmail">Email Address</label>
                        <input type="email" class="form-control" id="inputBasicEmail" name="inputEmail"
                          placeholder="Email Address" autocomplete="off" />
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicPassword">Password</label>
                        <input type="password" class="form-control" id="inputBasicPassword" name="inputPassword"
                          placeholder="Password" autocomplete="off" />
                      </div>
                      <div class="form-group">
                        <div class="checkbox-custom checkbox-default">
                          <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                          />
                          <label for="inputBasicRemember">Remember Me</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary">Sign Up</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>

              <div class="col-md-6">
                <!-- Example Basic Form (Form row) -->
                <div class="example-wrap">
                  <h4 class="example-title">Basic Form (Form row)</h4>
                  <div class="example">
                    <form autocomplete="off">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label class="form-control-label" for="inputBasicFirstName1">First Name</label>
                          <input type="text" class="form-control" id="inputBasicFirstName1" name="inputFirstName"
                            placeholder="First Name" autocomplete="off" />
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-control-label" for="inputBasicLastName1">Last Name</label>
                          <input type="text" class="form-control" id="inputBasicLastName1" name="inputLastName"
                            placeholder="Last Name" autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label">Gender</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputBasicMale1" name="inputGender" />
                            <label for="inputBasicMale1">Male</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputBasicFemale1" name="inputGender" checked />
                            <label for="inputBasicFemale1">Female</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicEmail1">Email Address</label>
                        <input type="email" class="form-control" id="inputBasicEmail1" name="inputEmail"
                          placeholder="Email Address" autocomplete="off" />
                      </div>
                      <div class="form-group">
                        <label class="form-control-label" for="inputBasicPassword1">Password</label>
                        <input type="password" class="form-control" id="inputBasicPassword1" name="inputPassword"
                          placeholder="Password" autocomplete="off" />
                      </div>
                      <div class="form-group">
                        <div class="checkbox-custom checkbox-default">
                          <input type="checkbox" id="inputBasicRemember1" name="inputCheckbox" checked autocomplete="off"
                          />
                          <label for="inputBasicRemember1">Remember Me</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary">Sign Up</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form (Form row) -->
              </div>

              <div class="col-md-12 col-lg-6">
                <!-- Example Basic Form Without Label -->
                <div class="example-wrap">
                  <h4 class="example-title">Basic Form Without Label</h4>
                  <div class="example">
                    <form>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="firstname" placeholder="First Name"
                            autocomplete="off" />
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="lastname" placeholder="Last Name"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputLabelMale" name="inputRadioGender" />
                          <label for="inputLabelMale">Male</label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputLabelFemale" name="inputRadioGender" checked />
                          <label for="inputLabelFemale">Female</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address"
                          autocomplete="off" />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password"
                          autocomplete="off" />
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Briefly Describe Yourself"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="checkbox-custom checkbox-default">
                          <input type="checkbox" id="inputCheckboxAgree" name="inputCheckboxesAgree" checked
                            autocomplete="off" />
                          <label for="inputCheckboxAgree">Agree Policy</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form Without Label -->
              </div>
            </div>
          </div>
        </div>

        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">
              Horizontal Form
            </h3>
          </header>
          <div class="panel-body container-fluid">

            <div class="row row-lg">

              <div class="col-md-12 col-lg-6">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">
                  <h4 class="example-title">Horizontal Form</h4>
                  <p>
                    Create horizontal forms with the grid by adding the <code>.row</code>                    class to form groups and using the <code>.col-*-*</code> classes
                    to specify the width of your labels and controls.Be sure to
                    add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s
                    as well so they’re vertically centered with their associated
                    form controls. For <code>&lt;legend&gt;</code> elements, you
                    can use <code>.col-form-legend</code> to make them appear similar
                    to regular <code>&lt;label&gt;</code> elements.
                  </p>
                  <div class="example">
                    <form>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Your Name: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="name" placeholder="Full Name" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <legend class="col-md-3 col-form-label">Your Gender: </legend>
                        <div class="col-md-9 d-flex align-items-center">
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="_inputHorizontalMale" name="inputRadiosMale2" />
                            <label for="inputHorizontalMale">Male</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="_inputHorizontalFemale" name="inputRadiosMale2" checked
                            />
                            <label for="inputHorizontalFemale">Female</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Your Email: </label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" name="email" placeholder="@email.com"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Description: </label>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Briefly Describe Yourself"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-9">
                          <button type="button" class="btn btn-primary">Submit </button>
                          <button type="reset" class="btn btn-default btn-outline">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Horizontal Form -->
              </div>

              <div class="col-md-12 col-lg-6">
                <!-- Example Horizontal Form -->
                <div class="example-wrap">
                  <h4 class="example-title">Horizontal Form</h4>
                  <p>
                    Use <code>.form-horizontal</code> class to set horizontal form.
                  </p>
                  <div class="example">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Your Name: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="name" placeholder="Full Name" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Your Gender: </label>
                        <div class="col-md-9">
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputHorizontalMale" name="inputRadiosMale2" />
                            <label for="inputHorizontalMale">Male</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputHorizontalFemale" name="inputRadiosMale2" checked
                            />
                            <label for="inputHorizontalFemale">Female</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Your Email: </label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" name="email" placeholder="@email.com"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Description: </label>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Briefly Describe Yourself"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          <button type="button" class="btn btn-primary">Submit </button>
                          <button type="reset" class="btn btn-default btn-outline">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Horizontal Form -->
              </div>
            </div>
          </div>
        </div>

        <!-- Panel Inline Form -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">
              Inline Form
            </h3>
          </header>
          <div class="panel-body">
            <p>
              Use <code>.form-inline</code> class in the form to style with inline
              fields.
            </p>
            <div class="example-wrap">
              <h4 class="example-title">Basic Inline Form</h4>
              <div class="example">
                <form class="form-inline">
                  <div class="form-group">
                    <label class="form-control-label" for="inputInlineUsername">Username</label>
                    <input type="text" class="form-control" id="inputInlineUsername" name="inputUsername"
                      placeholder="Username" autocomplete="off" />
                  </div>

                  <div class="form-group">
                    <label class="form-control-label" for="inputInlinePassword">Password</label>
                    <input type="password" class="form-control" id="inputInlinePassword" name="inputPassword"
                      placeholder="Password" autocomplete="off" />
                  </div>

                  <div class="form-group">
                    <div class="checkbox-custom checkbox-default">
                      <input type="checkbox" id="inputInlineRemember" name="inputCheckboxRemember" checked
                        autocomplete="off" />
                      <label for="inputInlineRemember">Remember me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-outline">Login</button>
                  </div>
                </form>
              </div>
              <h4 class="example-title">Basic Inline Form Without Label</h4>
              <div class="example">
                <form class="form-inline">
                  <div class="form-group">
                    <label class="sr-only" for="inputUnlabelUsername">Username</label>
                    <input type="text" class="form-control" id="inputUnlabelUsername" placeholder="Username"
                      autocomplete="off" />
                  </div>

                  <div class="form-group">
                    <label class="sr-only" for="inputUnlabelPassword">Password</label>
                    <input type="password" class="form-control" id="inputUnlabelPassword" placeholder="Password"
                      autocomplete="off" />
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-outline">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Inline Form -->

        <!-- Panel Controls Sizing -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Controls Sizing</h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6">
                <!-- Example Input Sizing -->
                <div class="example-wrap">
                  <h4 class="example-title">Input Sizing</h4>
                  <div class="example">
                    <input type="text" class="form-control form-control-lg" placeholder=".input-lg"
                    />
                  </div>
                  <div class="example">
                    <input type="text" class="form-control" placeholder="Default input" />
                  </div>
                  <div class="example">
                    <input type="text" class="form-control form-control-sm" placeholder=".input-sm"
                    />
                  </div>
                </div>
                <!-- End Example Input Sizing -->
              </div>

              <div class="col-md-6">
                <!-- Example Select Sizing -->
                <div class="example-wrap">
                  <h4 class="example-title">Select Sizing</h4>
                  <div class="example">
                    <select class="form-control form-control-lg">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                  <div class="example">
                    <select class="form-control">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                  <div class="example">
                    <select class="form-control form-control-sm">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Select Sizing -->
              </div>

              <div class="col-md-12">
                <!-- Example Column Sizing -->
                <div class="example-wrap">
                  <h4 class="example-title">Column Sizing</h4>
                  <div class="example">
                    <div class="row row-lg">
                      <div class="form-group col-md-2">
                        <input type="text" class="form-control" placeholder=".col-md-2">
                      </div>
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder=".col-md-4">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder=".col-md-6">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Example Column Sizing -->
              </div>

              <div class="col-md-12">
                <!-- Example Horizontal Form Label Sizing -->
                <div class="example-wrap">
                  <h4 class="example-title">Horizontal Form Label Sizing</h4>
                  <div class="example">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-lg form-control-label" for="inputSizingLarge">Large label</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control form-control-lg" id="inputSizingLarge" name="inputLarge"
                            placeholder="Large input">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-sm form-control-label" for="inputSizingSmall">Small label</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control form-control-sm" id="inputSizingSmall" name="inputLarge"
                            placeholder="Small input">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Horizontal Form Label Sizing -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Controls Sizing -->

        <!-- Panel Input Grid -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Input Grid</h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row">
              <div class="col-lg-12 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-12">
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-6">
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-6">
              </div>
              <div class="col-lg-4 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-4">
              </div>
              <div class="col-lg-4 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-4">
              </div>
              <div class="col-lg-4 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-4">
              </div>
              <div class="col-lg-3 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-3">
              </div>
              <div class="col-lg-3 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-3">
              </div>
              <div class="col-lg-3 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-3">
              </div>
              <div class="col-lg-3 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-3">
              </div>
              <div class="col-lg-2 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-2">
              </div>
              <div class="col-lg-2 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-2">
              </div>
              <div class="col-lg-2 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-2">
              </div>
              <div class="col-lg-2 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-2">
              </div>
              <div class="col-lg-2 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-2">
              </div>
              <div class="col-lg-2 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-2">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
              <div class="col-lg-1 form-group">
                <input type="text" class="form-control" placeholder=".col-lg-1">
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Input Grid -->
      </div>
    </div>
    <!-- End Page -->

    
    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="../../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../../global/vendor/jquery/jquery.js"></script>
    <script src="../../../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../../global/vendor/animsition/animsition.js"></script>
    <script src="../../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../../../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="../../../global/vendor/switchery/switchery.js"></script>
    <script src="../../../global/vendor/intro-js/intro.js"></script>
    <script src="../../../global/vendor/screenfull/screenfull.js"></script>
    <script src="../../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="../../../global/js/Component.js"></script>
    <script src="../../../global/js/Plugin.js"></script>
    <script src="../../../global/js/Base.js"></script>
    <script src="../../../global/js/Config.js"></script>
    
    <script src="../../assets/js/Section/Menubar.js"></script>
    <script src="../../assets/js/Section/GridMenu.js"></script>
    <script src="../../assets/js/Section/Sidebar.js"></script>
    <script src="../../assets/js/Section/PageAside.js"></script>
    <script src="../../assets/js/Plugin/menu.js"></script>
    
    <script src="../../../global/js/config/colors.js"></script>
    <script src="../../assets/js/config/tour.js"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="../../assets/js/Site.js"></script>
    <script src="../../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../../global/js/Plugin/switchery.js"></script>
        <script src="../../../global/js/Plugin/jquery-placeholder.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    

      $(document).ready(function() {
        var i = 1;
        $('.add').on('click', function() {
          var field = '<br><div>Link URL '+i+': <input type="text" name="blog_linku_one[]"> &nbsp; Link Name '+i+':  <input type="text" name="blog_linkn_one[]"></div>';
          $('.appending_div').append(field);
          i = i+1;
        })
      })
    </script>
  </body>
</html>
