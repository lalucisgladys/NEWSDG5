<!--res 5.6.2-->
                <div class=" w-100 h-auto mt-3" id="research562" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of non-discrimination policies for transgender</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res562 = $row['ID'];
                            $no_non_discrimination_trans = $row['no_non_discrimination_trans'];
                            $no_ppa_implemented = $row['no_ppa_implemented'];
                            $title_ppa = $row['title_ppa'];
                            $description_ppa = $row['description_ppa'];
                            $total_cost = $row['total_cost'];
                            $fund_source = $row['fund_source'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete562.php?delete=<?php echo $id_res562 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update562.php?update=<?php echo $id_res562 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_non_discrimination_trans ?></td>
                        <td class="text-center"><?php echo $no_ppa_implemented ?></td>
                        <td class="text-center"><?php echo $title_ppa ?></td>
                        <td class="text-center"><?php echo $description_ppa ?></td>
                        <td class="text-center"><?php echo $total_cost ?></td>
                        <td class="text-center"><?php echo $fund_source ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                    <!--res 5.6.3-->
                <div class=" w-100 h-auto mt-3" id="research563" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of maternity and paternity policy</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res563 = $row['ID'];
                            $no_maternity_paternity = $row['no_maternity_paternity'];
                            $no_ppa_implemented = $row['no_ppa_implemented'];
                            $title_ppa = $row['title_ppa'];
                            $description_ppa = $row['description_ppa'];
                            $total_cost = $row['total_cost'];
                            $fund_source = $row['fund_source'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete563.php?delete=<?php echo $id_res563 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update563.php?update=<?php echo $id_res563 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_maternity_paternity ?></td>
                        <td class="text-center"><?php echo $no_ppa_implemented ?></td>
                        <td class="text-center"><?php echo $title_ppa ?></td>
                        <td class="text-center"><?php echo $description_ppa ?></td>
                        <td class="text-center"><?php echo $total_cost ?></td>
                        <td class="text-center"><?php echo $fund_source ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                            <!--res 5.6.4-->
                            <div class=" w-100 h-auto mt-3" id="research564" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of paternity leave availed in the campus</th>
                        <th scope="col">Total equivalent amount of paternity leave availed</th>
                        <th scope="col">Total  number of maternity leave availed in the campus</th>
                        <th scope="col">Total equivalent amount of maternity leave availed</th>
                        <th scope="col">Total  number of solo parent leave availed in the campus</th>
                        <th scope="col">Total equivalent amount of solo parent leave availed</th>
                        <th scope="col">Total  number of 10-day VAWC leave availed in the campus</th>
                        <th scope="col">Total equivalent amount of 10-day VAWC leave availed</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.4`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res564 = $row['ID'];
                            $no_paternity = $row['no_paternity'];
                            $no_no_equi_paternity = $row['no_equi_paternity'];
                            $no_maternity_leave = $row['`no_maternity_leave` '];
                            $no_equi_maternity = $row['no_equi_maternity'];
                            $no_solo_parents = $row['no_solo_parents'];
                            $no_equi_solo_parents = $row['no_equi_solo_parents'];
                            $total_num_VAWC = $row['total_num_VAWC'];
                            $total_equi_VAWC = $row['total_equi_VAWC'];
                            $no_special = $row['no_special'];
                            $equi_special = $row['equi_special'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete564.php?delete=<?php echo $id_res564 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update564.php?update=<?php echo $id_res564 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_paternity ?></td>
                        <td class="text-center"><?php echo $no_equi_paternity ?></td>
                        <td class="text-center"><?php echo $no_maternity_leave ?></td>
                        <td class="text-center"><?php echo $no_equi_maternity ?></td>
                        <td class="text-center"><?php echo $no_solo_parents ?></td>
                        <td class="text-center"><?php echo $no_equi_solo_parents ?></td>
                        <td class="text-center"><?php echo $total_num_VAWC ?></td>
                        <td class="text-center"><?php echo $total_equi_VAWC ?></td>
                        <td class="text-center"><?php echo $no_special ?></td>
                        <td class="text-center"><?php echo $equi_special ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                    <!--res 5.6.5-->
            <div class=" w-100 h-auto mt-3" id="research565" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of solo parent employees</th>
                        <th scope="col">Total number of solo parent employees with solo parent ID</th>
                        <th scope="col">Total number of solo parent students</th>
                        <th scope="col">Total number of solo parent students with solo parent ID</th>
                        <th scope="col">Total number of employees who are children of solo parent</th>
                        <th scope="col">Total number of students who are children of solo parent</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.5`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res565 = $row['ID'];
                            $no_solo_employees = $row['no_solo_employees'];
                            $no_solo_solo = $row['no_solo_solo'];
                            $no_solo_students = $row['`no_solo_students` '];
                            $no_solostudents_solo = $row['no_solostudents_solo'];
                            $no_solo_parents = $row['no_solo_parents'];
                            $no_employees_children_soloparent = $row['no_employees_children_soloparent'];
                            $total_num_student_soloparents = $row['total_num_student_soloparents'];
                            
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete565.php?delete=<?php echo $id_res565 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update565.php?update=<?php echo $id_res565 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_solo_employees ?></td>
                        <td class="text-center"><?php echo $no_solo_solo ?></td>
                        <td class="text-center"><?php echo $no_solo_students ?></td>
                        <td class="text-center"><?php echo $no_solostudents_solo ?></td>
                        <td class="text-center"><?php echo $no_solo_parents ?></td>
                        <td class="text-center"><?php echo $no_employees_children_soloparent ?></td>
                        <td class="text-center"><?php echo $total_num_student_soloparents ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                      <!--res 5.6.6-->
            <div class=" w-100 h-auto mt-3" id="research566" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students who use the childcare facility (monthly)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.6`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res566 = $row['ID'];
                            $no_use_childfacility = $row['no_use_childfacility'];          
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete566.php?delete=<?php echo $id_res566 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update566.php?update=<?php echo $id_res566 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_use_childfacility ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                <!--res 5.6.7-->
          <div class=" w-100 h-auto mt-3" id="research567" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of staff and faculty who use the childcare facility (monthly)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.7`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res567 = $row['ID'];
                            $no_staff_faculty = $row['no_staff_faculty'];          
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete567.php?delete=<?php echo $id_res567 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update567.php?update=<?php echo $id_res567 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_staff_faculty ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                <!--res 5.6.8-->
          <div class=" w-100 h-auto mt-3" id="research568" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of mentoring schemes for female students</th>
                        <th scope="col">Total number of female employees who participate in the mentoring</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.8`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res568 = $row['ID'];
                            $no_mentoring_femalestudents = $row['no_mentoring_femalestudents'];
                            $title_ppa1 = $row['title_ppa1'];
                            $description_ppa = $row['`description_ppa` '];
                            $total_cost1 = $row['total_cost1'];
                            $fund_source1 = $row['fund_source1'];
                            $no_mentoring_female_employees = $row['no_mentoring_female_employees'];
                            $title_ppa2 = $row['title_ppa2'];
                            $short_description = $row['short_description'];
                            $total_cost2 = $row['total_cost2'];
                            $fund_source2 = $row['fund_source2'];
                            $total_female_employees = $row['total_female_employees'];
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete568.php?delete=<?php echo $id_res568 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update568.php?update=<?php echo $id_res568 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_mentoring_femalestudents ?></td>
                        <td class="text-center"><?php echo $title_ppa1 ?></td>
                        <td class="text-center"><?php echo $description_ppa ?></td>
                        <td class="text-center"><?php echo $total_cost1 ?></td>
                        <td class="text-center"><?php echo $fund_source1 ?></td>
                        <td class="text-center"><?php echo $no_mentoring_female_employees ?></td>
                        <td class="text-center"><?php echo $title_ppa2 ?></td>
                        <td class="text-center"><?php echo $short_description ?></td>
                        <td class="text-center"><?php echo $total_cost2 ?></td>
                        <td class="text-center"><?php echo $fund_source2 ?></td>
                        <td class="text-center"><?php echo $total_female_employees ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                    <!--res 5.6.9-->
          <div class=" w-100 h-auto mt-3" id="research569" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of policy protecting those reporting discrimination</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.9`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res569 = $row['ID'];
                            $no_policy_protecting = $row['no_policy_protecting'];
                            $no_ppa_implemented = $row['no_ppa_implemented'];
                            $title_ppa = $row['title_ppa'];
                            $description_ppa = $row['description_ppa'];
                            $total_cost = $row['total_cost'];
                            $fund_source = $row['fund_source'];
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete569.php?delete=<?php echo $id_res569 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update569.php?update=<?php echo $id_res569 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_policy_protecting ?></td>
                        <td class="text-center"><?php echo $no_ppa_implemented ?></td>
                        <td class="text-center"><?php echo $title_ppa ?></td>
                        <td class="text-center"><?php echo $description_ppa ?></td>
                        <td class="text-center"><?php echo $total_cost ?></td>
                        <td class="text-center"><?php echo $fund_source ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                <!--res 5.6.1.0-->
         <div class=" w-100 h-auto mt-3" id="research569" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of filed reports against discrimination</th>
                        <th scope="col">Total number of resolved discrimination cases</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.6.1.0`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res569 = $row['ID'];
                            $no_reports_discrimination = $row['no_reports_discrimination'];
                            $no_resolved_discrimination = $row['`no_resolved_discrimination'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete5610.php?delete=<?php echo $id_res5610 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update5610.php?update=<?php echo $id_res5610 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_reports_discrimination ?></td>
                        <td class="text-center"><?php echo $no_resolved_discrimination ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                     <!--res 5.7.1-->
             <div class=" w-100 h-auto mt-3" id="research571" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Level of functionality based of the FAT</th>
                        <th scope="col">Upload Memo of composition</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.7.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res571 = $row['ID'];
                            $level_functionality = $row['level_functionality'];
                            $upload_memo = $row['upload_memo'];
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete571.php?delete=<?php echo $id_res571 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update571.php?update=<?php echo $id_res571 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $level_functionality ?></td>
                        <td class="text-center"><?php echo $upload_memo ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                <!--res 5.7.2-->
          <div class=" w-100 h-auto mt-3" id="research572" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of activities conducted in the campus by CODI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.7.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res572 = $row['ID'];
                            $no_conducted_CODI = $row['no_conducted_CODI'];
                            $title_ppa = $row['title_ppa'];
                            $description_ppa = $row['description_ppa'];
                            $total_cost = $row['total_cost'];
                            $fund_source = $row['fund_source'];
                        
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete572.php?delete=<?php echo $id_res572 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update572.php?update=<?php echo $id_res572 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_conducted_CODI ?></td>
                        <td class="text-center"><?php echo $title_ppa ?></td>
                        <td class="text-center"><?php echo $description_ppa ?></td>
                        <td class="text-center"><?php echo $total_cost ?></td>
                        <td class="text-center"><?php echo $fund_source ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
                        <!--res 5.7.3-->
                        <div class=" w-100 h-auto mt-3" id="research573" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of number of filed sexual harassment cases</th>
                        <th scope="col">Total number of resolved sexual harassment cases</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.7.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            
                            $id_res573 = $row['ID'];
                            $no_sexual_harrassment = $row['no_sexual_harrassment'];
                            $no_resolved_sexual_harrassment = $row['no_resolved_sexual_harrassment'];
                        
                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete573.php?delete=<?php echo $id_res573 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update573.php?update=<?php echo $id_res573 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_sexual_harrassment ?></td>
                        <td class="text-center"><?php echo $no_resolved_sexual_harrassment ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
