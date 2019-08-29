create or replace PACKAGE PKG_CUSTOMER_HISTORY AS

PROCEDURE P_GET_CUSTOMER_HISTORY (

    p_CUSTOMERID                  IN      Event.CUSTOMER_ID%TYPE
    , m_customer_history_cursor   OUT     sys_refcursor
);

FUNCTION F_GET_LOGIN_DT(
    
    p_LogintDt          IN  VARCHAR2
    ,p_MharsLoginDt     IN  VARCHAR2
    
) RETURN VARCHAR2;

FUNCTION F_GET_LOGOUT_DT(
    
    p_LogoutDt           IN VARCHAR2
    ,p_MharsLogoutDt     IN VARCHAR2
    
) RETURN VARCHAR2;


END PKG_CUSTOMER_HISTORY;

