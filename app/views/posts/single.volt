<main>
<article class="article">
  <div class="catch_image" style="background-image: url({{ post.image|e }})"></div>
  <div class="single_container">
    <h2 class="ar_title">{{ post.title|e }}</h2>
    <p class="ar_host">ホストは{{ post.host|e }}さん</p>
    <p class="ar_guset_num">ゲスト{{ post.guest_num|e }}人</p>
    <p class="ar_bedroom_num">{{ post.bedroom_num|e }}寝室</p>
    <p class="ar_bed_num">ベッド{{ post.bed_num|e }}台</p>
    <p class="ar_bathroom_num">バスルーム{{ post.bathroom_num|e }}</p>
    <p class="ar_price">{{ post.price|e }}<span>円/１泊</span></p>
    <p class="ar_description">{{ post.description|e }}</p>
    <div class="single_map_area" data-latitude="{{ post.latitude|e }}" data-longitude="{{ post.longitude|e }}" data-title="{{ post.title|e }}">
      <div id="single_map"></div>
    </div>
  </div>
</article>
</main>
