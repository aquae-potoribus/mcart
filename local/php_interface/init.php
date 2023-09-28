<?
AddEventHandler("main", "OnAfterUserRegister", Array("MyClass", "AfterUserRegister"));


class MyClass
{
    static function AfterUserRegister(&$arFields)
    {
        $arGroups = CUser::GetUserGroup($arFields["USER_ID"]);

        $rsUser = CUser::GetByID($arFields["USER_ID"]);
        $arUser = $rsUser->Fetch();

        $UserType = $arUser['UF_USER_GROUP'];

        switch ($UserType) {
            case "buyer":
                $arGroups[] = 6;
                break;
            case "seller":
                $arGroups[] = 7;
                break;
        }
        CUser::SetUserGroup($arFields["USER_ID"], $arGroups);

    }
}


?>