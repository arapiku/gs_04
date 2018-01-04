<main>
{% if posts is defined %}
<ul class="post_list">
{% for post in posts %}
    <li id="{{ post.id|e }}" class="list" data-latitude="{{ post.latitude|e }}" data-longitude="{{ post.longitude|e }}" data-price="{{ post.price|e }}" data-title="{{ post.title|e }}">
      <a href="/{{ post.id|e }}">
        <div class="pl_inner">
          <figure>
            <img src="{{ post.image|e }}" class="image">
          </figure>
          <div class="list_content">
            <p class="bedroom_num">部屋数：{{ post.bedroom_num|e }}室</p>
            <p class="bed_num">ベッド数：{{ post.bedroom_num|e }}台</p>
            <p class="title">{{ post.title|e }}</p>
            <p class="price">{{ post.price|e }}</p>
          </div>
        </div>
      </a>
    </li>
{% endfor %}
</ul>
{% endif %}
<div class="map_area">
  <div id="map">

  </div>
</div>
</main>
