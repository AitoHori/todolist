<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css" />
  <title>COACHTECH</title>
</head>
<body>
  <div class="todolist">
    <h1>Todo List</h1>
    <form  action="/todo/create" method="post">
      @csrf
      <input class="top-form" type="text" name="content" >
      <button class="plus">追加</button>
    </form>
  <table>
    <tr class="top">
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
  @foreach ($items as $item)
  <tr>
    <form action="/todo/update" method="post">
      @csrf
      <td>
        {{$item->created_at}}
      </td>
      <td>
        <input type="text" class="input_content" name="id" value={{$item->content}}>
        <input type="hidden" class="input-update" name="id" value={{$item->content}}>
      </td>
      <td>
        <button type="submit" class="update">更新</button>
      </td>
    </form>
      <td>
        <form action="/todo/delete"  method="post">
          @csrf
          <input type="hidden" class="input-delete" name="id" value={{$item->id}}>
        <button class="delete">削除</button>
        </form>
      </td>
  </tr>
  @endforeach
  </table>
  </div>
</body>
</html>

