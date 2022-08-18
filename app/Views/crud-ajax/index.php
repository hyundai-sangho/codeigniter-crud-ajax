<!DOCTYPE html>
<html lang="ko">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>코드이그나이터 Crud - Ajax</title>
  </head>

  <body>
    <div class="container-fluid bg-dark p-4">
      <div class="container">
        <h1 class="text-center text-white">Ci Crud With Ajax</h1>
      </div>
    </div>
    <div class="container my-3">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h2>전체 ( 4 )</h2>
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">생성</button>

        </div>
      </div>
    </div>
    <div class="container my-3">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>아이디</th>
              <th>이름</th>
              <th>지역</th>
              <th>나이</th>
              <th>수정</th>
              <th>삭제</th>
            </tr>
          </thead>
          <tbody id="get-data">

          </tbody>
        </table>
      </div>
    </div>

    <!-- 학생 정보 등록 -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">학생 정보 등록</h4>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for=""><b>이름 입력</b></label>
                <input type="text" name="name" id="name" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                <label for=""><b>나이 입력</b></label>
                <input type="number" name="age" id="age" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                <label for=""><b>지역 입력</b></label>
                <input type="text" name="country" id="country" class="form-control form-control-lg">
              </div>
              <div class="form-group">
                <button type="submit" id="save" class="btn btn-success">저장</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>




    <!-- 학생 정보 업데이트 -->
    <div id="editStudent" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">학생 정보 업데이트</h4>
          </div>
          <div class="modal-body">
            <form action="">
              <div id="edit-data"></div>
              <button type="submit" id="update" class="btn btn-success">업데이트</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
          </div>
        </div>

      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>
  </body>

</html>