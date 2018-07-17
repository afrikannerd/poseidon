
<?php  $this->setTitle('Students');?>
<?php $this->open('head');?>
    <link href="/assets/css/student.css" rel="stylesheet" type="text/css"/>
<?php $this->close();?>
<?php $this->open('body');?>

<div class="container">
    <div class="student-panel">
        <div class="h2">Student Portal</div>
        <div class="clearfix"></div>
        <div class=" logout-banner">
            <?= Core\Security\Session::get('username')?>
        </div>
    </div>
    <div class="col col-md-2 list-group student-sidebar">
        <a href="#" class="list-group-item" >Exam Results</a>
        <a href="#" class="list-group-item" >Fee History</a>
    </div>
    <div class="panel col-md-offset-2 student-body">
        <div class="panel-heading">Student Details</div>
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
                            <td>3,000</td>
                        </tr>
                        <tr>
                            <td>Fee Balance</td>
                            <td style="color: #e55039;">47,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>


<?php $this->close();?>