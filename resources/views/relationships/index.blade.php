<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <ul>
                    <li><a href="{{ url('/learn/oneToOne') }}">一对一关系</a></li>
                    <li><a href="{{ url('/learn/oneToMany') }}">一对多关系</a></li>
                    <li><a href="{{ url('/learn/manyToMany') }}">多对多关系</a></li>
                    <li><a href="{{ url('/learn/hasManyThrough') }}">远层一对多</a></li>
                    <li><a href="{{ url('/learn/polymorphicRelations') }}">多态关联</a></li>
                    <li><a href="{{ url('/learn/manyToManyPolymorphicRelations') }}">多对多多态关联</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
