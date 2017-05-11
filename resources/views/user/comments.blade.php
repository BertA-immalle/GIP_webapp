<!DOCTYPE html>
<html>
<head>
    <title></title>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">your comments</div>

                        <div class="panel-body">
                        
                            <ul>
                            
                                @foreach ($comments as $comment)

                                    <li>{{ $comment->content }}</li>

                                @endforeach
                            
                            </ul>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
