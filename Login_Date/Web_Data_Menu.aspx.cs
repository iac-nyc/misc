function WebDateMenu_ItemClick(sender, e)
{
    switch (e.getItem().get_key())
    {
        case "Search":
            return SEARCH_LINK();
            break;
            
        case "SEARCH_LOGIN_DATE":
            return SEARCH_LOGIN_DATE();
            break;
            
        case "Maintenance":
            return MAINTENANCE();
            break;
            
        
            
    }
}