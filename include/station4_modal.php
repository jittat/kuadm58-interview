<div class="modal fade" id="station4_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2ECC71">
      <!--   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title"><h3><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color: #fff;"></span><font color="white"> รายละเอียด ผู้สมัคร (จบการสัมภาษณ์)</font></h3></h4>
      </div>
      <div class="modal-body">
        <div class="row" ng-show="overlap">
            <div class="col-md-4"><h4><b>หมายเหตุ</b></h4></div>
            <font color="red"><div class="col-md-6"><h4>{{ have_come }}</h4></div></font>
        </div>
        <div class="row">
            <div class="col-md-4"><h4><b>เลขที่สมัคร</b></h4></div>
            <div class="col-md-6"><h4>{{info.national_id}}</h4></div>
        </div>
        <div class="row">
            <div class="col-md-4"><h4><b>ชื่อ-นามสกุล</b></h4></div>
            <div class="col-md-6"><h4>{{info.full_name}}</h4></div>
        </div>
        <div class="row">
            <div class="col-md-4"><h4><b>สาขาวิชา-คณะ</b></h4></div>
            <div class="col-md-6"><h4>{{info.major.title}}</h4></div>
        </div>
        <div class="row" ng-show="! info.document_passed">
            <div class="col-md-4"><h4><b>ผลการตรวจสอบหลักฐาน</b></h4></div>
            <div class="col-md-6"><h4><b><span class="glyphicon glyphicon-remove" aria-hidden="true"  style="color:#c12e2a;"></span> ไม่ผ่าน</b></h4></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="hide_modal_station4()">ยกเลิก</button>
        <button type="button" class="btn btn-success" ng-click="confirm_station4()">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>
