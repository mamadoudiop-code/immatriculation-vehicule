



<?php
    $this->load->view('template_2/header');
?>
<!-- Begin page -->
<div id="wrapper">
    <?php
        $this->load->view('template_2/top_bar');
        $this->load->view('template_2/left_sidebar');
        $this->load->view('template_2/right_content');
        //$this->load->view('template/right_sidebar');
    ?>
</div>
<!-- END wrapper -->



<?php
    $this->load->view('template_2/footer');
?>