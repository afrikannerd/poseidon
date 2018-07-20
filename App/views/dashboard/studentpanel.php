<?php

/**
 * Description of studentpanel
 * Created on : Jun 29, 2018, 12:20:30 PM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */

$this->setTitle('Admin | Students');
$this->open("head");

$this->close();
$this->open("body");
navigation();
sidebar();
?>
<div class="row offset main" id="main">
    <h3 class="page-header">Students</h3>
    <section class="content">
        <div class="row">
            <div class="container-fluid">
                <div class="btn-group ">
                    <button class="btn btn-primary" type="button" >Add New Student</button>
                    <button class="btn btn-primary view_student" type="button" >View Students</button>
                    <button class="btn btn-danger" type="button" >Remove Student</button>
                </div>
            </div>
        </div>    
        
        <div class="panel_content">
            <div class="panel">
                <div class="panel-heading">Add New Student</div>
                <div class="panel-body">
                    <div class="form-group col-md-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="admno">Admission Number</label>
                        <input type="number" name="admno" id="admno" class="form-control" required/>
                    </div>
                    <?php if(!empty($data))
                        {?>
                    <div class="form-group col-md-3">
                        <label for="class">Class</label>
                        <select name="class" id="class" class="class form-control">
                            <?php
                            while ($row = array_shift($data))
                            {
                                foreach ($row as $val){
                                ?>
                            <option value="<?= $val?>"><?= $val ?></option>
                                <?php }}?>
                        </select>
                    </div>
                            <?php }?>
                    <div class="form-group col-md-3">

                        <button type="submit" class="btn  btn-primary add-student" id="addnew">Add</button>

                    </div>
                    <div id="info"></div>
                </div>
            </div>
        </div> 
    </section>
</div>

<?php
$this->close();