<?php

declare(strict_types=1);

class Database
{
  private $conn;

  // https://php.watch/versions/8.0/constructor-property-promotion#:~:text=Constructor%20Property%20Promotion%20is%20a,class%20constructor%20is%20quite%20verbose.
  function __construct(private string|null $tb = null)
  {
    $database = env("DB_DATABASE");
    $username = env("DB_USERNAME");
    $password = env("DB_PASSWORD");

    $this->conn = $conn = new mysqli("localhost", $username, $password, $database);
    if ($conn->connect_error) {
      die($conn->connect_error);
    }
  }

  protected function close($stmt)
  {
    // $stmt->close();
    // $this->conn->close();
  }

  # PARAM body, insert multiple
  # RETURN inserted id or affected rows
  protected function create(array $req, bool $isMultiple = false): int
  {
    if ($isMultiple) {
      foreach ($req as $e)
        $this->create($e);
      return count($req);
    } else {
      $len = count($req);
      $fields = join(",", array_keys($req));
      $params = rtrim(str_repeat("?,", $len), ",");
      $types = str_repeat("s", $len);
      $values = array_values($req);
      // 
      $sql = "INSERT INTO {$this->tb} ({$fields}) VALUES ({$params})";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param($types, ...$values);
      $stmt->execute();
      // 
      $this->close($stmt);
      return $this->conn->insert_id ?? -1;
    }
  }

  # PARAM body or id
  # RETURN rows or row
  protected function read(array|int $req = 0): array|object
  {
    $res = [];
    // 
    if (is_int($req) && $req > 0) {
      $res = new stdClass;
      $sql = "SELECT * FROM {$this->tb} WHERE id=?";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("i", $req);
      $stmt->execute();
      $result = $stmt->get_result();
      $res = $result->fetch_object() ?? new stdClass;
    } else if (is_array($req)) {
      $field = array_keys($req)[0];
      $value = array_values($req)[0];
      // 
      $sql = "SELECT * FROM {$this->tb} WHERE {$field}=?";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("s", $value);
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        array_push($res, $row);
      }
    } else {
      $res = [];
      $sql = "SELECT * FROM {$this->tb} ORDER BY id DESC";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        array_push($res, $row);
      }
    }
    // 
    $this->close($stmt);
    return $res;
  }

  # PARAM body or id
  # RETURN rows or row
  protected function like(array $req): array
  {
    $res = [];
    $field = array_keys($req)[0];
    $value = array_values($req)[0];
    // 
    $sql = "SELECT * FROM {$this->tb} WHERE {$field} LIKE CONCAT('%',?,'%') ORDER BY id DESC";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $value);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
      array_push($res, $row);
    }
    // 
    $this->close($stmt);
    return $res;
  }

  # PARAM body or id
  # RETURN rows or row
  protected function top(int $req = 1): object
  {
    // 
    $res = new stdClass;
    $sql = "SELECT * FROM {$this->tb} ORDER BY id DESC LIMIT ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $req);
    $stmt->execute();
    $result = $stmt->get_result();
    $res = $result->fetch_object() ?? new stdClass;
    // 
    $this->close($stmt);
    return $res;
  }

  # PARAM body and id
  # RETURN affected rows
  protected function update(array $req, int $id): int
  {
    $fieldset = implode("=?,", array_keys($req)) . '=?';
    $types = str_repeat("s", count($req)) . 'i';
    $values = array_merge(array_values($req), [$id]);
    // 
    $sql = "UPDATE {$this->tb} SET {$fieldset} WHERE id=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    $res = $stmt->affected_rows ?? -1;
    // 
    $this->close($stmt);
    return $res;
  }

  # PARAM body or id
  # RETURN rows or row
  protected function paginate(int $limit, int $offset): array
  {
    // 
    $res = [];
    $sql = "SELECT * FROM {$this->tb} ORDER BY id DESC LIMIT ? OFFSET ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("ii", $limit, $offset);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
      array_push($res, $row);
    }
    // 
    $this->close($stmt);
    return $res;
  }
  
  # PARAM id
  # RETURN affected rows
  protected function delete(int $id): int
  {
    $sql = "DELETE FROM {$this->tb} WHERE id=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->affected_rows ?? -1;
    // 
    $this->close($stmt);
    return $res;
  }
}
