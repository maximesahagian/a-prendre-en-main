<section class="team-section">
<div class="equipe-line">
    <div class="equipe-image-container">

        <?php $i = 1; ?>
        @foreach($team as $member)
            <div class="image-profile" style="background: url('img/members/{{$member->image}}'); background-size: cover; background-position: center;">
                <div class="color color-{{$i}}">

                </div>
                <span>{{$member->name}}</span>
            </div>

            <?php $i++; ?>
        @endforeach

    </div>
</div>

</section>