<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/IDB22.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo ('Panel de Control'); ?></span>
            </a>
        </li>

        <!-- STUDENT -->
        <li class="<?php
        if ($page_name == 'student_add' ||
                $page_name == 'student_information' ||
                $page_name == 'student_marksheet')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo ('Estudiantes'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_add">
                        <span><i class="entypo-dot"></i> <?php echo ('Agregar Estudiante'); ?></span>
                    </a>
                </li>

                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo ('Información Estudiantes'); ?></span>
                    </a>
                    <ul>
<?php $classes = $this->db->get('class')->result_array();
foreach ($classes as $row):
    ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo ('Class'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
<?php endforeach; ?>
                    </ul>
                </li>

                <!-- STUDENT MARKSHEET -->
                <li class="<?php if ($page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_marksheet/<?php echo $row['class_id']; ?>">
                        <span><i class="entypo-dot"></i> <?php echo ('Hoja de Calificaciones'); ?></span>
                    </a>
                    <ul>
<?php $classes = $this->db->get('class')->result_array();
foreach ($classes as $row):
    ?>
                            <li class="<?php if ($page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_marksheet/<?php echo $row['class_id']; ?>">
                                    <span><?php echo ('Clase'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
<?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/teacher_list">
                <i class="entypo-users"></i>
                <span><?php echo ('Profesor'); ?></span>
            </a>
        </li>



        <!-- SUBJECT -->
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-docs"></i>
                <span><?php echo ('Asignatura'); ?></span>
            </a>
            <ul>
<?php $classes = $this->db->get('class')->result_array();
foreach ($classes as $row):
    ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/subject/<?php echo $row['class_id']; ?>">
                            <span><?php echo ('Clase'); ?> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
<?php endforeach; ?>
            </ul>
        </li>

        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/class_routine">
                <i class="entypo-target"></i>
                <span><?php echo ('Rutina de Clases'); ?></span>
            </a>
        </li>
        


        <!-- DAILY ATTENDANCE -->
        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/manage_attendance/<?php echo date("d/m/Y"); ?>">
                <i class="entypo-chart-area"></i>
                <span><?php echo ('Asistencia Diaria'); ?></span>
            </a>

        </li>

        <!-- EXAMS -->
        <li class="<?php
if ($page_name == 'exam' ||
        $page_name == 'grade' ||
        $page_name == 'marks')
    echo 'opened active';
?> ">
            <a href="#">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo ('Examenes'); ?></span>
            </a>
            <ul>

                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/marks">
                        <span><i class="entypo-dot"></i> <?php echo ('Administrar Notas'); ?></span>
                    </a>
                </li>
            </ul>
        </li>


        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/noticeboard">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo ('Comunicados'); ?></span>
            </a>
        </li>

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/message">
                <i class="entypo-mail"></i>
                <span><?php echo ('Mensajes'); ?></span>
            </a>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo ('Cuenta'); ?></span>
            </a>
        </li>

    </ul>

</div>