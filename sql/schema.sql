drop table if exists comment;

create table comment (
  comment_id int auto_increment,
  comment_published_date date default (now())
  comment_text varchar(255) not null,
  comment_user_name varchar(64) not null,
  primary key (comment_id)
) default charset = utf8mb4;

insert into comment (comment_text, comment_user_name)
values ('Hello world, how are you today?', 'I, robot');
