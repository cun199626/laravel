@extends('welcome')
    <table>
        <tr>
            <td>姓名</td>
            <td>年龄</td>
            <td>性别</td>
            <td>爱好</td>
            <td>操作</td>
        </tr>
        @foreach($res as $k=>$v)
            <tr>
                <td>{{$v->name}}</td>
                <td>{{ $v->age }}</td>
                <td>{{ $v->sex }}</td>
                <td>{{ $v->hobby }}</td>
                <td>
                    <a href="del?id={{$v->id}}">删除</a>
                    <a href="up?id={{$v->id}}">修改</a>
                </td>
            </tr>
        @endforeach
    </table>
