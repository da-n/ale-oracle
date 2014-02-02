    <article>
      <section class="welcome">
        <h3>&ldquo;Ale Oracle, help me!&rdquo;</h3>
      </section>
      <?php if ($sliders) : ?>
      <section>
        <ul id="scroller">
          <?php foreach ($sliders as $slider) : ?>
            <li>
              <img src="/assets/img/profiles/thumbs/profile-<?php echo $slider['id']; ?>.jpg" width="40" height="40" class="thumb">
              <img src="/assets/img/ales/thumbs/ale-<?php echo $slider['ale']; ?>.jpg" width="40" height="40" class="thumb">
              <h5><?php echo $slider['ale_name']; ?></h5>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
      <?php endif; ?>
      <section class="next">
        <h5>Answer 3 simple questions and the Ale Oracle will recommend a matching ale.</h5>
        <a href="#" class="button">Consult The Ale Oracle <span class="chevron right"></span></a>
      </section>
    </article>
