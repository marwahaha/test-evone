<?php

namespace Safe;

use Safe\Exceptions\MssqlException;

/**
 * Binds a parameter to a stored procedure or a remote stored procedure.
 *
 * @param resource $stmt Statement resource, obtained with mssql_init.
 * @param string $param_name The parameter name, as a string.
 *
 * You have to include the @ character, like in the
 * T-SQL syntax. See the explanation included in
 * mssql_execute.
 * @param mixed $var The PHP variable you'll bind the MSSQL parameter to. It is passed by
 * reference, to retrieve OUTPUT and RETVAL values after
 * the procedure execution.
 * @param int $type One of: SQLTEXT,
 * SQLVARCHAR, SQLCHAR,
 * SQLINT1, SQLINT2,
 * SQLINT4, SQLBIT,
 * SQLFLT4, SQLFLT8,
 * SQLFLTN.
 * @param bool $is_output Whether the value is an OUTPUT parameter or not. If it's an OUTPUT
 * parameter and you don't mention it, it will be treated as a normal
 * input parameter and no error will be thrown.
 * @param bool $is_null Whether the parameter is NULL or not. Passing the NULL value as
 * var will not do the job.
 * @param int $maxlen Used with char/varchar values. You have to indicate the length of the
 * data so if the parameter is a varchar(50), the type must be
 * SQLVARCHAR and this value 50.
 * @throws MssqlException
 *
 */
function mssql_bind($stmt, string $param_name, &$var, int $type, bool $is_output = false, bool $is_null = false, int $maxlen = -1): void
{
    error_clear_last();
    $result = \mssql_bind($stmt, $param_name, $var, $type, $is_output, $is_null, $maxlen);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * Closes the link to a MS SQL Server database that's associated with the
 * specified link identifier.  If the link identifier isn't specified, the
 * last opened link is assumed.
 *
 * Note that this isn't usually necessary, as non-persistent open
 * links are automatically closed at the end of the script's
 * execution.
 *
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * mssql_connect.
 *
 * This function will not close persistent links generated by
 * mssql_pconnect.
 * @throws MssqlException
 *
 */
function mssql_close($link_identifier = null): void
{
    error_clear_last();
    if ($link_identifier !== null) {
        $result = \mssql_close($link_identifier);
    } else {
        $result = \mssql_close();
    }
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * mssql_connect establishes a connection to a
 * MS SQL server.
 *
 * The link to the server will be closed as soon as the execution of
 * the script ends, unless it's closed earlier by explicitly calling
 * mssql_close.
 *
 * @param string $servername The MS SQL server. It can also include a port number, e.g.
 * hostname:port (Linux), or
 * hostname,port (Windows).
 * @param string $username The username.
 * @param string $password The password.
 * @param bool $new_link If a second call is made to mssql_connect with the
 * same arguments, no new link will be established, but instead, the link
 * identifier of the already opened link will be returned. This parameter
 * modifies this behavior and makes mssql_connect
 * always open a new link, even if mssql_connect was
 * called before with the same parameters.
 * @return resource Returns a MS SQL link identifier on success, .
 * @throws MssqlException
 *
 */
function mssql_connect(string $servername = null, string $username = null, string $password = null, bool $new_link = false)
{
    error_clear_last();
    if ($new_link !== false) {
        $result = \mssql_connect($servername, $username, $password, $new_link);
    } elseif ($password !== null) {
        $result = \mssql_connect($servername, $username, $password);
    } elseif ($username !== null) {
        $result = \mssql_connect($servername, $username);
    } elseif ($servername !== null) {
        $result = \mssql_connect($servername);
    } else {
        $result = \mssql_connect();
    }
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * mssql_data_seek moves the internal row
 * pointer of the MS SQL result associated with the specified result
 * identifier to point to the specified row number, first row being
 * number 0. The next call to mssql_fetch_row
 * would return that row.
 *
 * @param resource $result_identifier The result resource that is being evaluated.
 * @param int $row_number The desired row number of the new result pointer.
 * @throws MssqlException
 *
 */
function mssql_data_seek($result_identifier, int $row_number): void
{
    error_clear_last();
    $result = \mssql_data_seek($result_identifier, $row_number);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * Returns the length of field no. offset in
 * result.
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to mssql_query.
 * @param int $offset The field offset, starts at 0. If omitted, the current field is used.
 * @return int The length of the specified field index on success .
 * @throws MssqlException
 *
 */
function mssql_field_length($result, int $offset = -1): int
{
    error_clear_last();
    $result = \mssql_field_length($result, $offset);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the name of field no. offset in
 * result.
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to mssql_query.
 * @param int $offset The field offset, starts at 0. If omitted, the current field is used.
 * @return string The name of the specified field index on success .
 * @throws MssqlException
 *
 */
function mssql_field_name($result, int $offset = -1): string
{
    error_clear_last();
    $result = \mssql_field_name($result, $offset);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * Seeks to the specified field offset.  If the next call to
 * mssql_fetch_field won't include a field
 * offset, this field would be returned.
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to mssql_query.
 * @param int $field_offset The field offset, starts at 0.
 * @throws MssqlException
 *
 */
function mssql_field_seek($result, int $field_offset): void
{
    error_clear_last();
    $result = \mssql_field_seek($result, $field_offset);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * Returns the type of field no. offset in
 * result.
 *
 * @param resource $result The result resource that is being evaluated. This result comes from a
 * call to mssql_query.
 * @param int $offset The field offset, starts at 0. If omitted, the current field is used.
 * @return string The type of the specified field index on success .
 * @throws MssqlException
 *
 */
function mssql_field_type($result, int $offset = -1): string
{
    error_clear_last();
    $result = \mssql_field_type($result, $offset);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * mssql_free_result only needs to be called
 * if you are worried about using too much memory while your script
 * is running. All result memory will automatically be freed when
 * the script ends. You may call mssql_free_result
 * with the result identifier as an argument and the associated
 * result memory will be freed.
 *
 * @param resource $result The result resource that is being freed. This result comes from a
 * call to mssql_query.
 * @throws MssqlException
 *
 */
function mssql_free_result($result): void
{
    error_clear_last();
    $result = \mssql_free_result($result);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * mssql_free_statement only needs to be called
 * if you are worried about using too much memory while your script
 * is running. All statement memory will automatically be freed when
 * the script ends. You may call mssql_free_statement
 * with the statement identifier as an argument and the associated
 * statement memory will be freed.
 *
 * @param resource $stmt Statement resource, obtained with mssql_init.
 * @throws MssqlException
 *
 */
function mssql_free_statement($stmt): void
{
    error_clear_last();
    $result = \mssql_free_statement($stmt);
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
}


/**
 * Initializes a stored procedure or a remote stored procedure.
 *
 * @param string $sp_name Stored procedure name, like ownew.sp_name or
 * otherdb.owner.sp_name.
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * mssql_connect.
 * @return resource Returns a resource identifier "statement", used in subsequent calls to
 * mssql_bind and mssql_execute,
 * s.
 * @throws MssqlException
 *
 */
function mssql_init(string $sp_name, $link_identifier = null)
{
    error_clear_last();
    if ($link_identifier !== null) {
        $result = \mssql_init($sp_name, $link_identifier);
    } else {
        $result = \mssql_init($sp_name);
    }
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * mssql_pconnect acts very much like
 * mssql_connect with two major differences.
 *
 * First, when connecting, the function would first try to find a
 * (persistent) link that's already open with the same host,
 * username and password.  If one is found, an identifier for it
 * will be returned instead of opening a new connection.
 *
 * Second, the connection to the SQL server will not be closed when
 * the execution of the script ends.  Instead, the link will remain
 * open for future use (mssql_close will not
 * close links established by mssql_pconnect).
 *
 * This type of links is therefore called 'persistent'.
 *
 * @param string $servername The MS SQL server. It can also include a port number. e.g.
 * hostname:port.
 * @param string $username The username.
 * @param string $password The password.
 * @param bool $new_link If a second call is made to mssql_pconnect with
 * the same arguments, no new link will be established, but instead, the
 * link identifier of the already opened link will be returned. This
 * parameter modifies this behavior and makes
 * mssql_pconnect always open a new link, even if
 * mssql_pconnect was called before with the same
 * parameters.
 * @return resource Returns a positive MS SQL persistent link identifier on success, .
 * @throws MssqlException
 *
 */
function mssql_pconnect(string $servername = null, string $username = null, string $password = null, bool $new_link = false)
{
    error_clear_last();
    if ($new_link !== false) {
        $result = \mssql_pconnect($servername, $username, $password, $new_link);
    } elseif ($password !== null) {
        $result = \mssql_pconnect($servername, $username, $password);
    } elseif ($username !== null) {
        $result = \mssql_pconnect($servername, $username);
    } elseif ($servername !== null) {
        $result = \mssql_pconnect($servername);
    } else {
        $result = \mssql_pconnect();
    }
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * mssql_query sends a query to the currently active
 * database on the server that's associated with the specified link
 * identifier.
 *
 * @param string $query An SQL query.
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * mssql_connect or
 * mssql_pconnect.
 *
 * If the link identifier isn't specified, the last opened link is
 * assumed.  If no link is open, the function tries to establish a link
 * as if mssql_connect was called, and use it.
 * @param int $batch_size The number of records to batch in the buffer.
 * @return mixed Returns a MS SQL result resource on success, TRUE if no rows were
 * returned, .
 * @throws MssqlException
 *
 */
function mssql_query(string $query, $link_identifier = null, int $batch_size = 0)
{
    error_clear_last();
    if ($batch_size !== 0) {
        $result = \mssql_query($query, $link_identifier, $batch_size);
    } elseif ($link_identifier !== null) {
        $result = \mssql_query($query, $link_identifier);
    } else {
        $result = \mssql_query($query);
    }
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
    return $result;
}


/**
 * mssql_select_db sets the current active
 * database on the server that's associated with the specified link
 * identifier.
 *
 * Every subsequent call to mssql_query will be
 * made on the active database.
 *
 * @param string $database_name The database name.
 *
 * To escape the name of a database that contains spaces, hyphens ("-"),
 * or any other exceptional characters, the database name must be
 * enclosed in brackets, as is shown in the example, below. This
 * technique must also be applied when selecting a database name that is
 * also a reserved word (such as primary).
 * @param resource $link_identifier A MS SQL link identifier, returned by
 * mssql_connect or
 * mssql_pconnect.
 *
 * If no link identifier is specified, the last opened link is assumed.
 * If no link is open, the function will try to establish a link as if
 * mssql_connect was called, and use it.
 * @throws MssqlException
 *
 */
function mssql_select_db(string $database_name, $link_identifier = null): void
{
    error_clear_last();
    if ($link_identifier !== null) {
        $result = \mssql_select_db($database_name, $link_identifier);
    } else {
        $result = \mssql_select_db($database_name);
    }
    if ($result === false) {
        throw MssqlException::createFromPhpError();
    }
}
