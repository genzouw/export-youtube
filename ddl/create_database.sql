-- ### Add under line To .vimrc file. ###
-- let g:dbext_default_profile_<|1|> = 'type=PGSQL:user=<|1|>:passwd=<|1|>:dbname=<|1|>:host=localhost'
create database export_youtube
    default character set utf8;

grant
    create,
    drop,
    insert,
    update,
    delete,
    select,
    alter,
    index,
    create view,
    -- execute,
    -- create routine,
    -- alter routine,
    lock tables
on export_youtube.*
    to export_youtube@localhost
    identified by 'export_youtube';

flush privileges;

