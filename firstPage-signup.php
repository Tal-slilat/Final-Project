<?php include_once "inc/header_html_loading.php" ?>

<h1 class="text-center">Cute Monaters</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-lg-3 col-md-3 col-xs-3 text-right">

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link" id="nav-trainer-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">מאלף כלבים</a>
    <a class="nav-item nav-link" id="nav-owner-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">בעל כלב/ים</a>
  </div>
</nav>


<div class="tab-content" id="nav-tabContent">
 
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-trainer-tab">

<!-- הרשמה של מאלף כלב -->
        <form id="rtl">
                <div class="form-group">
                    <label for="exampleInputEmail1">שם פרטי</label>
                        <input type="text" id="fname_trainer" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">שם משפחה</label>
                        <input type="text" id="lname_trainer" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">אימייל</label>
                        <input type="email" id="email_trainer" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputEmail1">סיסמא</label>
                        <input type="password" id="pass_trainer" class="form-control">
                </div>

            <div class="form-group">
                    <label for="exampleInputEmail1">וידוא סיסמא</label>
                        <input  type="password" id="confirm_pass_trainer" class="form-control">
            </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">תעודת מאלף</label>
                    <input type="file" class="form-control-file" id="approve_pic_trainer">
                </div>
 
                <button type="button" id="btn_reg_trainer"  class="btn btn-outline-secondary btn-sm btn-block">הירשם</button>
        </form>
    </div>

    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-owner-tab">

<!-- הרשמה של בעל כלב -->
        <form id="rtl">
            <div class="form-group">
                <label for="exampleInputEmail1">שם פרטי</label>
                   <input type="text" id="fname_owner" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">שם משפחה</label>
                    <input type="text" id="lname_owner" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">סוג כלב</label>
                    <input type="text" id="dog_kind_owner" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">שם הכלב</label>
                    <input type="text" id="dog_name_owner" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">אימייל</label>
                    <input type="email" id="email_owner" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">סיסמא</label>
                    <input type="password" id="pass_owner" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">וידוא סיסמא</label>
                    <input type="password" id="confirm_pass_owner" class="form-control">
            </div>

            <button type="button" id="btn_reg_owner" class="btn btn-outline-secondary btn-sm btn-block">הירשם</button>
        </form>


    </div>
</div>

            </div> 
            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4"></div> 
            <div class="col-sm-5 col-lg-5 col-md-5 col-xs-5">
            </div>  
        </div>
    </div>

    <footer class="footer foFPS">
        by Tal Slilat and Baruch Lebovitz
    </footer>

</body>

</html>