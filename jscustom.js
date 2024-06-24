$(document).ready(function () {
  $('.btn_drpdownMore').on("click", () => {
    event.stopPropagation();
    $('.dropdownMORE').toggleClass('isShow')
  })
  $(document).on("click", (event) => {
    if (!$(event.target).closest('.btn_drpdownMore').length && !$(event.target).closest('.dropdownMORE').length) {
      $('.dropdownMORE').removeClass('isShow');
    }
  });

  const veritifyCate = () => {
    $('.popupCertificate').toggleClass('isShow');
  }

  const veritifyCateClosePopup = () => {
    $('.popupCertificate').removeClass('isShow');
    getAllLoadingisHidden();
    getAllverifyBlockHidden();
  }

  $('.veritifyCateBtn').on("click", () => {
    veritifyCate();
    firtLoading();
  })

  $('.veritifyCateBtnClose').on("click", () => {
    veritifyCateClosePopup();
  })

  $('#cdk-overlay-11').on("click", () => {
    event.stopPropagation();
  })

  $('.cdk-overlay-backdrop-showing').on("click", () => {
    veritifyCateClosePopup();
  })

  const getAllLoading = (time) => {
    let eBlockLoading = document.querySelectorAll('.verifying');
    eBlockLoading.forEach((item) => {
      const delay = time + 1000;
      setTimeout(() => {
        item.classList.add('isHidden')
      }, delay);
    });
  }

  const getAllverifyBlockShow = (time) => {
    let verifyBlockShow = document.querySelectorAll('.verifyBlockShow');
    verifyBlockShow.forEach((item) => {
      const delay = time + 1000;
      setTimeout(() => {
        item.classList.add('isShow')
      }, delay);
    });
  }

  const firtLoading = () => {
    getAllLoading(Math.random());
    getAllverifyBlockShow(Math.random());
  }

  const getAllLoadingisHidden = () => {
    let eBlockLoadingHidden = document.querySelectorAll('.verifying.isHidden');
    eBlockLoadingHidden.forEach(item => item.classList.remove('isHidden'));
  }

  const getAllverifyBlockHidden = () => {
    let verifyBlockHidden = document.querySelectorAll('.verifyBlockShow.isShow');
    verifyBlockHidden.forEach(item => item.classList.remove('isShow'));
  }
  $('.btn_showMoreExpandText').on("click", function () {
    let description_js_text = $('.description_js_text');
    let description_js_textHeight = description_js_text.height() + $('.recipient-issuer.row-xs').height() + 180;

    if ($(this).hasClass('active')) {
      $('.sp_expandText').css({
        "max-height": "60px",
        "mask-image": "linear-gradient(to top, transparent 8%, black 56%)"
      });
      $('.btn_showMoreExpandText .trailing-margin').text('Show more');
    } else {
      $('.sp_expandText').css({
        "max-height": description_js_textHeight,
        "mask-image": "none"
      });
      $('.btn_showMoreExpandText .trailing-margin').text('Show less');
    }

    $(this).toggleClass('active');
  });

});