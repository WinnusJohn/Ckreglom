@section('main-content')
<div class="container">
    <h1>Fullscreen Mobile Modal Test Page</h1>
    <p>
      Fullscreen modal provides more native user experience for Bootstrap modals on mobile phones. This page is a comparison of regular and fullscreen modals. Please view it on mobile device or resize viewport to mobile width.
    </p <p>
      Get <i>boostrap-fs-plugin</i> <a href="https://github.com/keaukraine/bootstrap-fs-modal">from GitHub</a> or get it as an <a href="https://npmjs.com/package/bootstrap-fs-modal">npm package</a>.
    </p>
    <div class="row">
      <div class="col-xs-12">
        <h4>Large Modal Comparison:</h4>
      </div>
      <div class="col-xs-6">
        <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modalLargeDefault">Default</button>
      </div>
      <div class="col-xs-6">
        <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modalLarge">FullScreen</button>
      </div>
    </div>
  </div>
  
  <div class="modal fade modal-fullscreen" id="modalLarge" tabindex="-1" role="dialog" aria-labelledby="modalLargeLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLargeLabel">Modal with large content</h4>
        </div>
        <div class="modal-body">
          <p>
            <i>Fullscreen modal provides more native user experience on mobile phones by placing buttons in header for them to be easily reachable.</i>
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dui tempor, finibus ligula vitae, convallis mi. Sed posuere at neque nec hendrerit. Sed vitae felis gravida, ultricies dui eget, venenatis leo. Nunc hendrerit tellus non velit malesuada,
            eu dapibus sapien placerat. Sed non viverra magna, sit amet ornare erat. Fusce eros mi, consequat ac elit vel, ullamcorper molestie mauris. Proin auctor orci eget lacinia condimentum. Phasellus ultricies ligula id lacinia posuere. Nulla rutrum
            eros eu arcu tempor, imperdiet ornare lectus convallis. Nulla eleifend dapibus sem, vel viverra sapien.
          </p>
          <p>
            Integer interdum ex augue, vel egestas nibh fermentum eu. Cras ut erat eu nisi ullamcorper scelerisque vitae in lorem. In hac habitasse platea dictumst. Pellentesque in ante aliquam, porta metus eu, viverra magna. Cras blandit, augue in consequat rhoncus,
            nulla risus sodales mi, at tincidunt dolor leo semper mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pellentesque purus porta maximus blandit. Suspendisse id lorem pellentesque, vehicula
            nulla at, congue eros. Duis eleifend semper sodales. Morbi eu sagittis ex. Praesent commodo rhoncus nisi. Aenean quis arcu mauris.
          </p>
          <p>
            Donec eget ex ut nibh ullamcorper commodo. Aenean ac faucibus mi. Nullam luctus dui diam, in congue sem fringilla et. Vivamus non metus at elit ornare maximus. Nam iaculis ex in dolor rutrum, at facilisis dolor euismod. Sed lacinia sagittis lobortis.
            Suspendisse turpis tellus, pharetra scelerisque odio eget, condimentum tempus nibh. Praesent in diam ac sapien dignissim luctus a quis sapien. Duis sed lacus magna. Maecenas at fringilla quam. Ut purus risus, ultricies eget risus ut, convallis
            hendrerit eros. Fusce vehicula libero quam, nec cursus nulla interdum eu. Quisque commodo suscipit justo, id auctor metus varius rutrum.
          </p>
          <p>
            Integer et fermentum sapien. Proin eu eros efficitur, malesuada ipsum vel, tincidunt risus. Proin cursus laoreet varius. Donec eros sapien, accumsan ac facilisis id, egestas quis turpis. Mauris dignissim, sem et pellentesque consequat, erat dui tempus
            nulla, ut laoreet neque ligula ac libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris dictum accumsan erat et tempus. Pellentesque ac ipsum at dui blandit mollis. Suspendisse a turpis non velit commodo iaculis. Donec
            sit amet sem risus. Nunc pharetra lacus vitae faucibus mattis. Vestibulum molestie, quam et efficitur consequat, dui nibh pulvinar sapien, sit amet pharetra mauris sem sed massa.
          </p>
          <p>
            Integer interdum ex augue, vel egestas nibh fermentum eu. Cras ut erat eu nisi ullamcorper scelerisque vitae in lorem. In hac habitasse platea dictumst. Pellentesque in ante aliquam, porta metus eu, viverra magna. Cras blandit, augue in consequat rhoncus,
            nulla risus sodales mi, at tincidunt dolor leo semper mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pellentesque purus porta maximus blandit. Suspendisse id lorem pellentesque, vehicula
            nulla at, congue eros. Duis eleifend semper sodales. Morbi eu sagittis ex. Praesent commodo rhoncus nisi. Aenean quis arcu mauris.
          </p>
          <p>
            In tempus neque vitae magna congue, convallis blandit dolor mollis. Fusce rutrum in diam ac pretium. Vivamus sagittis, elit at cursus lacinia, mauris urna feugiat quam, et tincidunt nulla justo eget dui. Nullam malesuada felis quis dolor aliquam scelerisque.
            Maecenas porta, neque sit amet auctor bibendum, urna nibh porta enim, et auctor turpis ligula vel quam. In vulputate eu erat quis bibendum. Mauris vel felis luctus, ultricies nulla ac, euismod diam.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-default" data-glyphicon="glyphicon-refresh">Reload Data</button>
          <button type="button" class="btn btn-default btn-primary" data-glyphicon="glyphicon-ok">Save</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modalLargeDefault" tabindex="-1" role="dialog" aria-labelledby="modalLargeDefaultLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLargeDefaultLabel">Modal with large content</h4>
        </div>
        <div class="modal-body">
          <p>
            <i>Regular Bootstrap modals (with a lot of content) on mobile devices can cause additional scrolling to get to the bottom buttons of modal.</i>
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dui tempor, finibus ligula vitae, convallis mi. Sed posuere at neque nec hendrerit. Sed vitae felis gravida, ultricies dui eget, venenatis leo. Nunc hendrerit tellus non velit malesuada,
            eu dapibus sapien placerat. Sed non viverra magna, sit amet ornare erat. Fusce eros mi, consequat ac elit vel, ullamcorper molestie mauris. Proin auctor orci eget lacinia condimentum. Phasellus ultricies ligula id lacinia posuere. Nulla rutrum
            eros eu arcu tempor, imperdiet ornare lectus convallis. Nulla eleifend dapibus sem, vel viverra sapien.
          </p>
          <p>
            Integer interdum ex augue, vel egestas nibh fermentum eu. Cras ut erat eu nisi ullamcorper scelerisque vitae in lorem. In hac habitasse platea dictumst. Pellentesque in ante aliquam, porta metus eu, viverra magna. Cras blandit, augue in consequat rhoncus,
            nulla risus sodales mi, at tincidunt dolor leo semper mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pellentesque purus porta maximus blandit. Suspendisse id lorem pellentesque, vehicula
            nulla at, congue eros. Duis eleifend semper sodales. Morbi eu sagittis ex. Praesent commodo rhoncus nisi. Aenean quis arcu mauris.
          </p>
          <p>
            Donec eget ex ut nibh ullamcorper commodo. Aenean ac faucibus mi. Nullam luctus dui diam, in congue sem fringilla et. Vivamus non metus at elit ornare maximus. Nam iaculis ex in dolor rutrum, at facilisis dolor euismod. Sed lacinia sagittis lobortis.
            Suspendisse turpis tellus, pharetra scelerisque odio eget, condimentum tempus nibh. Praesent in diam ac sapien dignissim luctus a quis sapien. Duis sed lacus magna. Maecenas at fringilla quam. Ut purus risus, ultricies eget risus ut, convallis
            hendrerit eros. Fusce vehicula libero quam, nec cursus nulla interdum eu. Quisque commodo suscipit justo, id auctor metus varius rutrum.
          </p>
          <p>
            Integer et fermentum sapien. Proin eu eros efficitur, malesuada ipsum vel, tincidunt risus. Proin cursus laoreet varius. Donec eros sapien, accumsan ac facilisis id, egestas quis turpis. Mauris dignissim, sem et pellentesque consequat, erat dui tempus
            nulla, ut laoreet neque ligula ac libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris dictum accumsan erat et tempus. Pellentesque ac ipsum at dui blandit mollis. Suspendisse a turpis non velit commodo iaculis. Donec
            sit amet sem risus. Nunc pharetra lacus vitae faucibus mattis. Vestibulum molestie, quam et efficitur consequat, dui nibh pulvinar sapien, sit amet pharetra mauris sem sed massa.
          </p>
          <p>
            Integer interdum ex augue, vel egestas nibh fermentum eu. Cras ut erat eu nisi ullamcorper scelerisque vitae in lorem. In hac habitasse platea dictumst. Pellentesque in ante aliquam, porta metus eu, viverra magna. Cras blandit, augue in consequat rhoncus,
            nulla risus sodales mi, at tincidunt dolor leo semper mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pellentesque purus porta maximus blandit. Suspendisse id lorem pellentesque, vehicula
            nulla at, congue eros. Duis eleifend semper sodales. Morbi eu sagittis ex. Praesent commodo rhoncus nisi. Aenean quis arcu mauris.
          </p>
          <p>
            In tempus neque vitae magna congue, convallis blandit dolor mollis. Fusce rutrum in diam ac pretium. Vivamus sagittis, elit at cursus lacinia, mauris urna feugiat quam, et tincidunt nulla justo eget dui. Nullam malesuada felis quis dolor aliquam scelerisque.
            Maecenas porta, neque sit amet auctor bibendum, urna nibh porta enim, et auctor turpis ligula vel quam. In vulputate eu erat quis bibendum. Mauris vel felis luctus, ultricies nulla ac, euismod diam.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-default">Reload Data</button>
          <button type="button" class="btn btn-default btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
@endsection