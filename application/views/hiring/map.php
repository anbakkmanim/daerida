<?php $this->load->view('layout/header'); ?>

<?php $this->load->view('layout/nav'); ?>

<div id="map" style="width: 100vw; height: 100vh; position: fixed;"></div>

<div id="content" style="position: fixed;">
  <div class="mt-2 ml-2">
    <div class="card d-inline-block">
      <div class="card-body">
        <div class="form-group label-floating">
            <?php if($this->session->me_idx == null){ ?>
                <div class="text">로그인 이후 사용 하실 수 있습니다.</div>
            <?php }else{ ?>
                팔로우한 회사들
                <div class="list-group mt-3 mb-0">
                    <?php foreach ($follow as $company) { ?>
                        <a href="/member/Company?me_c_idx=<?=$company['me_c_idx']?>"><div class="list-group-item list-group-item-action"><?=$company['me_c_name']?></div></a>
                    <?php } ?>
                </div>
            <?php } ?>
      </div>
    </div>
  </div>
</div>

<script src="http://dapi.kakao.com/v2/maps/sdk.js?appkey=<?= $this->config->item('daum_map_token', 'token'); ?>&libraries=drawing,clusterer,services"></script>
<script>
    function moveContent() {
        if (window.matchMedia("(min-width: 768px)").matches) {
            document.getElementById("content").style.marginLeft = "70px";
        }
        else {
            document.getElementById("content").style.marginLeft = "0px";
        }
    }
    document.body.onresize = moveContent;
    document.addEventListener("DOMContentLoaded", moveContent);
    const mapLevel = 12;
const map = new daum.maps.Map(document.getElementById('map'), {
	center: new daum.maps.LatLng(36.463185, 128.413770),
	level: mapLevel
});

// const place = new daum.maps.services.Places();
// place.setMap(map);
//
// const getNewMarker = (map, lat, lng) => new daum.maps.Marker({map: map, position: new daum.maps.LatLng(lat, lng)});
//
// const search = () => {
//   const keyword = document.getElementById("map_query").value;
//   place.keywordSearch(keyword, (result, status) => {
//     if (status === daum.maps.services.Status.OK) {
//       console.log(result);
//       map.setCenter(new daum.maps.LatLng(result[0].y, result[0].x));
//       getNewMarker(map, result[0].y, result[0].x).setMap(map);
//     }
//   });
// };

const geocoder = new daum.maps.services.Geocoder();

<?php foreach ($follow as $company) { ?>
geocoder.addressSearch('<?= $company['me_c_sido'] ?>', function(result, status) {

    // 정상적으로 검색이 완료됐으면
    if (status === daum.maps.services.Status.OK) {

        const coords = new daum.maps.LatLng(result[0].y, result[0].x);

        // 결과값으로 받은 위치를 마커로 표시합니다
        const marker = new daum.maps.Marker({
            map: map,
            position: coords
        });

        // 인포윈도우로 장소에 대한 설명을 표시합니다
        const infowindow = new daum.maps.InfoWindow({
            content: '<div style="width:150px;text-align:center;padding:6px 0;"><?= $company['me_c_name'] ?></div>'
        });
        infowindow.open(map, marker);

        daum.maps.event.addListener(marker, 'click', function() {
            map.setCenter(coords);
            map.setLevel(mapLevel - 8);
        });
    }
});
<?php } ?>
</script>

<?php $this->load->view('layout/footer'); ?>