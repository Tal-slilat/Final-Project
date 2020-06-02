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


        <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">שם פרטי</label>
                        <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">שם משפחה</label>
                        <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">אימייל</label>
                        <input type="email" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputEmail1">סיסמא</label>
                        <input type="password" class="form-control">
                </div>

            <div class="form-group">
                    <label for="exampleInputEmail1">וידוא סיסמא</label>
                        <input type="password" class="form-control">
            </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">תעודת מאלף</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <button type="submit" class="btn btn-outline-secondary btn-sm btn-block">הירשם</button>
        </form>
    </div>

    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-owner-tab">

        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">שם פרטי</label>
                   <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">שם משפחה</label>
                    <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">סוג כלב</label>
                    <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">שם הכלב</label>
                    <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">אימייל</label>
                    <input type="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">סיסמא</label>
                    <input type="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">וידוא סיסמא</label>
                    <input type="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-outline-secondary btn-sm btn-block">הירשם</button>
        </form>


    </div>
</div>

            </div> 
            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4"></div> 
            <div class="col-sm-5 col-lg-5 col-md-5 col-xs-5">
            </div>  
        </div>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="footer">
        by Tal Slilat and Baruch Lebovitz
    </footer>

</body>

</html>