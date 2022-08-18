$(document).ready(function () {
  // 데이터 가져오기
  const displayData = () => {
    $.ajax({
      url: "/getData",
      type: "GET",
      success: (data) => {
        $("#get-data").html(data);
      },
    });
  };
  displayData();

  // 데이터 입력
  $("#save").on("click", function (e) {
    e.preventDefault();
    const 이름 = $("#name").val();
    const 나이 = $("#age").val();
    const 지역 = $("#country").val();

    if (지역 == "" || 나이 == "" || 이름 == "") {
      alert("지역, 나이, 이름 모두 적어주세요.");
    } else {
      $.ajax({
        url: "/addStudent",
        type: "POST",
        data: {
          name: 이름,
          age: 나이,
          country: 지역,
        },
        success: (결과값) => {
          if (결과값 == 1) {
            alert("데이터 추가 성공");
            $("#myModal").modal("hide");
            $("#name").val("");
            $("#age").val("");
            $("#country").val("");

            displayData();
          } else alert("문제가 있네요. 확인 요망!!");
        },
      });
    }
  });

  $(document).on("click", "#delete", function () {
    const id = $(this).data("id");

    console.log(id);

    $.ajax({
      url: "/deleteData",
      type: "POST",
      data: { id: id },
      success: (결과값) => {
        if (결과값 == 1) {
          console.log(결과값);
          alert("데이터 삭제 완료");
          displayData();
        } else {
          alert("문제가 있네요. 확인 요망!!");
        }
      },
    });
  });

  $(document).on("click", "#edit", function () {
    const id = $(this).data("id");

    $.ajax({
      url: "/editData",
      type: "POST",
      data: { id: id },
      success: (결과값) => {
        $("#edit-data").html(결과값);
      },
    });
  });

  $("#update").on("click", function (e) {
    e.preventDefault();
    const 아이디 = $("#id").val();
    const 이름 = $("#edit_name").val();
    const 나이 = $("#edit_age").val();
    const 지역 = $("#edit_country").val();

    if (지역 == "" || 나이 == "" || 이름 == "") {
      alert("지역, 나이, 이름 모두 적어주세요.");
    } else {
      $.ajax({
        url: "/updateData",
        type: "POST",
        data: {
          id: 아이디,
          name: 이름,
          age: 나이,
          country: 지역,
        },
        success: (결과값) => {
          if (결과값 == 1) {
            alert("데이터 업데이트 성공");

            $("#editStudent").modal("hide");
            $("#id").val("");
            $("#edit_name").val("");
            $("#edit_age").val("");
            $("#edit_country").val("");

            displayData();
          } else alert("문제가 있네요. 확인 요망!!");
        },
      });
    }
  });
});
