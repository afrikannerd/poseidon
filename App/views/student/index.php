
<?php  $this->setTitle('Students - '.Core\Security\Session::get('name'));?>
<?php $this->open('head');?>
    <link href="/assets/css/student.css" rel="stylesheet" type="text/css"/>
<?php $this->close();?>
<?php $this->open('body');?>

<div class="container">
    <?php student_nav();?>
    <?php student_sidebar();?>
    <div class="panel col-md-offset-2 student-body">
        <div class="panel-heading">Personal Details</div>
        <div class="panel-body">
                   <div class="col-md-6 table-responsive">
        <table class="table  table-bordered">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><?= Core\Security\Session::get('name')?></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><?= Core\Security\Session::get('username')?></td>
                        </tr>
                        <tr>
                            <td>Adm No</td>
                            <td><?= Core\Security\Session::get('user_id')?></td>
                        </tr>
                        <tr>
                            <td>Class</td>
                            <td>3A</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>Male</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 table-responsive">
                <table class="table  table-bordered">
                    <tbody>
                        <tr>
                            <td>Term Fee</td>
                            <td>50,000</td>
                        </tr>
                        <tr>
                            <td>Fee Paid</td>
                            <td>53,000</td>
                        </tr>
                        <tr>
                            <td>Fee Balance</td>
                            <td style="color: rgb(35,177,77);">3,000 <small>(Overpayment)</small></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>


<?php $this->close();?>