CREATE TABLE [uuu_admin] (
[id] INTEGER  PRIMARY KEY AUTOINCREMENT NOT NULL,
[username] VARCHAR(20)  NULL,
[kind] INTEGER  NULL,
[psd] VARCHAR(32)  NULL,
[lasttime] VARCHAR(12)  NULL,
[lastip] VARCHAR(20)  NULL,
[nickname] VARCHAR(20)  NULL,
[alevel] INTEGER  NULL,
[power] TEXT  NULL,
[asetting] TEXT  NULL,
[ucmsid] VARCHAR(36)  NULL
);
CREATE TABLE [uuu_channel] (
[cid] INTEGER  PRIMARY KEY AUTOINCREMENT NOT NULL,
[fid] INTEGER  NULL,
[cname] VARCHAR(50)  NULL,
[ckind] INTEGER  NULL,
[ifshow] INTEGER  NULL,
[ifshownav] INTEGER  NULL,
[ifshowadmin] INTEGER  NULL,
[ifshowleft] INTEGER  NULL,
[newwindow] INTEGER  NULL,
[corder] INTEGER  NULL,
[csetting] TEXT  NULL,
[cvalue] TEXT  NULL
);
CREATE TABLE [uuu_moudle] (
[id] INTEGER  PRIMARY KEY AUTOINCREMENT NOT NULL,
[cid] INTEGER  NULL,
[fid] VARCHAR(20)  NULL,
[mname] VARCHAR(20)  NULL,
[minfo] VARCHAR(100)  NULL,
[mcontent] TEXT  NULL,
[mkind] INTEGER  NULL,
[morder] INTEGER  NULL,
[ifcreated] INTEGER  NULL,
[ifshow] INTEGER  NULL,
[ifonly] INTEGER  NULL,
[ifadmin] INTEGER  NULL,
[ifmore] INTEGER  NULL,
[hide] INTEGER  NULL,
[ifshowtemp] TEXT  NULL,
[strarray] VARCHAR(250)  NULL,
[strdefault] VARCHAR(250)  NULL,
[msetting] TEXT  NULL,
[mfunction] VARCHAR(50)  NULL
);
CREATE TABLE [uuu_str] (
[id] INTEGER  PRIMARY KEY AUTOINCREMENT NOT NULL,
[strcid] INTEGER  NULL,
[strname] VARCHAR(50)  NULL,
[strvalue] TEXT  NULL,
[strinfo] VARCHAR(250)  NULL,
[strstyle] VARCHAR(250)  NULL,
[ifshow] INTEGER  NULL,
[ifbind] INTEGER  NULL,
[ifadmin] INTEGER  NULL,
[inputkind] INTEGER  NULL,
[strorder] INTEGER  NULL,
[strarray] VARCHAR(250)  NULL,
[ssetting] TEXT  NULL,
[strtip] TEXT NULL
);